<?php

use App\Models\Auction;
use App\Models\Cart;
use App\Models\Favorite;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// simple app

Route::view('/', 'index')->name('index');
Route::view('AboutUs', 'about-us')->name('aboutUs');
Route::view('Contact-Us', 'contact-us')->name('contactUs');
Route::view('ShopNow/{id?}', 'shop-left-sidebar')->name('ShopLeft');
Route::view('/Design', 'design')->name('design');
Route::view('/Wallet', 'wallet')->name('wallet');
Route::get('/single-product/{product}', fn(Product $product) => view('single-product',['product' => $product]))->name('single-product');

Route::middleware('auth')->group(function(){
    Route::post('/Order/checkout',function(Request $request) {
        $user = Auth::user();
        $cart = Cart::where('user_id',$user->id)->get();
        foreach($cart as $item){
            
        }
    });
    Route::post('/update-cart-quantity', function (Request $request) {
        dd($request->id);
        $cartItem = Cart::find($request->id);
    
        if ($cartItem) {
            $cartItem->basket_quantity = $request->quantity;
            $cartItem->update();
        }
    
        return response()->json(['success' => true]);
    })->name('UpdateCart');

    
    Route::post('/add-bid', function(Request $request) {
        $request->validate([
            'bid_amount' => 'required|numeric|min:0',
        ]);
    
        $bidAmount = $request->input('bid_amount');
        $auctionId = $request->input('id');
        $auction = Auction::find($auctionId);
    
        if ($bidAmount > $auction->endPrice) {
            $auction->endPrice = $bidAmount;
            $auction->update();
    
            return redirect()->back()->with('success', 'Bid placed successfully');
        } else {
            return redirect()->back()->withErrors('Bid must be higher than the current end price');
        }
    })->name('addBid');



    Route::view('/checkout', 'checkout')->name('checkout');
    Route::post('editProfile', function(Request $request) {
        $user = Auth::user();

        // Validate the request data
        $request->validate([
            'user_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,user_email,' . $user->id,
            'currentPassword' => 'nullable|string|',
            'NewPassword' => 'nullable|string',
        ]);
        // Update the user profile
        $user->user_name = $request->input('user_name');
        $user->user_email = $request->input('email');

        // Check if the old password is provided and matches
        if ($request->filled('currentPassword') && Hash::check($request->input('currentPassword'), $user->user_password)) {
            if ($request->filled('NewPassword')) {
                $user->user_password = Hash::make($request->input('NewPassword'));
            }
        }else {
            return redirect()->back()->withErrors('Wrong Password');
        }

        $user->update();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    })->name('editProfile');
    Route::view('/profile', 'my-account')->name('profile');
    Route::get('/searchShop', function(Request $request) {
        $items = Product::where('item_name', 'LIKE', '%' . $request->search . '%')->paginate(9);
        return view('shop-left-sidebar', compact('items'));
    })->name('search');
    // cart
    Route::view('cart', 'cart')->name('cart');
    Route::get('cart/{product}', function(Product $product){

        $productt = auth()->user()->carts()->create(['basket_itemid' => $product->id,'basket_quantity' => 1]);
        if($productt){
            return redirect(route('cart'));
        }
        abort(500);
    })->name('cart.save');

    Route::get('cart/{id}/destroy', function($id){
        $product = auth()->user()->carts()->find($id);
        if($product->delete()){
            return redirect()->back();
        }
        abort(500);
    })->name('cart.destroy');
    // end carts
    


    Route::get('/logout', function() {
        Auth::logout();
        return redirect()->back();
    })->name('logout');
    // wishlist //
    Route::view('wishlist', 'wishlist')->name('wishlist');
    // save
    Route::get('/wishlist/{product}', function(Product $product){
        $fav = auth()->user()->favorites()->create(['favorite_itemid' => $product->id]);
        if($fav){
            return redirect(route('wishlist'));
        }
        abort(500);
    })->name('wishlist.save');
    // destroy wishlist
    Route::get('/wishlist/{id}/destroy', function($id){
        // $fav = auth()->user()->favorites()->where('basket_id', $id)->get();
        $fav = Favorite::where('favorite_id', $id)->get()[0];
        
        if($fav->delete()){
            return redirect()->back();
        }
        abort(500);
    })->name('wishlist.destroy');
    // end wishlist
});
Route::view('/auction', 'auction')->name('auction');
Route::middleware('guest')->group(function(){
    Route::view('/login-register', 'login-register')->name('login-register');

    Route::post('signup', function(Request $request){
        $request->validate([
            'first_name' => "required",
            'last_name' => "required",
            'email' => ['required','email','regex:/..*@(gmail).com/','unique:users,user_email'],
            'password' => "required",
            'confirm_password' => "required|same:password",
        ]);

        $user = User::create([
            'user_name' => $request->first_name.' '.$request->last_name,
            'user_email' => $request->email,
            'user_password' => $request->password,
        ]);

        if($user){
            if(auth()->attempt(['user_email' => $request->email, 'password' => $request->password])){
                return redirect(route('index'));
            }
            abort(500);
        }
    })->name('signup.submit');

    Route::post('signin', function(Request $request){
        $request->validate([
            'email' => "required",
            'password' => "required"
        ]);

        if(auth()->attempt(['user_email' => $request->email, 'password' => $request->password], $request->remember_me)){
            return redirect(route('index'));
        }
        return redirect()->back()->withErrors(['account' => 'email or password is not correct']);
    })->name('signin.submit');



    
});

Route::fallback(fn() => redirect(route('index')));
