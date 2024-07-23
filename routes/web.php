<?php

use App\Http\Controllers\AllController;
use App\Models\Auction;
use App\Models\Cart;
use App\Models\ClientsDesign;
use App\Models\Design;
use App\Models\Favorite;
use App\Models\Product;
use App\Models\User;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::get('/dashboard', fn () => view('Dashboard'))->name('dashboard');

// simple app
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ], function () {
        Route::post('/coupon_code', function (Request $request) {
            $discound = DB::table('promo_codes') // Replace 'your_table_name' with the actual table name
                ->where('code', '=', $request->input('coupon_code'))
                ->first();

            return view('checkout', compact('discound'));
        })->name('coupon_code');
        Route::view('/', 'index')->name('index');
        Route::view('AboutUs', 'about-us')->name('aboutUs');
        Route::view('Contact-Us', 'contact-us')->name('contactUs');
        Route::view('ShopNow/{id?}', 'shop-left-sidebar')->name('ShopLeft');
        Route::get('/Design', function (Request $request) {
            $desgines = Design::all();

            // dd($desgines);
            return view('design', compact('desgines'));
        })->name('design')->middleware('auth');

        Route::view('/Wallet', 'wallet')->name('wallet')->middleware('auth');
        Route::post('/Wallet', function (Request $request) {

            $data = Http::asForm()->post('https://one-backkend.crevel-eg.com/setting/viewWallet.php', [
                'id' => Auth::user()->id,
            ]);

            dd($data->body());
        })->name('wallet.save');
        // Route::get('/test', function (Request $request) {
        //
        Route::post('/wallet/update', function (Request $request) {
            Withdraw::create([
                'user_id' => Auth::user()->id,
                'amount' => $request['withdrawal_number'],
                'methods' => $request['method'],
            ]);

            return redirect()->back()->with('success');
        })->name('wallet.update');
        // });
        Route::get('/single-product/{product}', fn (Product $product) => view('single-product', ['product' => $product]))->name('single-product');
        Route::post('/upload-desgine', function (Request $request) {
            // Decode the base64 image data
            $image = $request->image;  // your base64 encoded
            $image = str_replace('data:image/png;base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $imageName = Str::random(10).'.'.'png';

            // Specify the storage disk and save the image
            Storage::disk('public')->put($imageName, base64_decode($image));
            ClientsDesign::create([
                'user_id' => Auth::user()->id,
                'image' => $imageName,
            ]);

            // Return the filename of the uploaded image
            return redirect()->back();

        })->name('upload.desgine');
        Route::middleware('auth')->group(function () {

            Route::post('/credit', [AllController::class, 'credit'])->name('credit');
            Route::get('/callback', [AllController::class, 'callback'])->name('callback');

            Route::post('/Order/checkout', function (Request $request) {
                $user = auth()->user();
                $cart = Cart::where('basket_userid', $user->id)->get();
                $request->validate([
                    'city' => 'required',
                    'address' => 'required',
                    'buildNum' => 'required',
                    'notes' => 'required',
                ]);
                $total = 0;
                foreach ($cart as $item) {
                    $total += $item->product->item_price;
                    $item->city = $request->city;
                    $item->adderss = $request->address;
                    $item->buildNum = $request->buildNum;
                    $item->notes = $request->notes;
                    $item->item_price += $total;
                    $item->update();
                }

                return redirect()->back()->with('success', 'Order Place Successfully');
            })->name('checkoutCheck');
            Route::post('/update-cart-quantity', function (Request $request) {
                $cartItem = Cart::find($request->cart_item_id);

                if ($cartItem) {
                    $cartItem->basket_quantity = $request->quantity;
                    $cartItem->update();
                }

                return redirect()->back();
            })->name('UpdateCart');

            Route::post('/add-bid', function (Request $request) {
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
            Route::post('editProfile', function (Request $request) {
                $user = Auth::user();

                // Validate the request data
                $request->validate([
                    'user_name' => 'required|string|max:255',
                    'email' => 'required|email|max:255|unique:users,user_email,'.$user->id,
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
                } else {
                    return redirect()->back()->withErrors('Wrong Password');
                }

                $user->update();

                return redirect()->back()->with('success', 'Profile updated successfully.');
            })->name('editProfile');
            Route::view('/profile', 'my-account')->name('profile');
            Route::get('/searchShop', function (Request $request) {
                $items = Product::where('item_name', 'LIKE', '%'.$request->search.'%')->paginate(9);

                return view('shop-left-sidebar', compact('items'));
            })->name('search');
            // cart
            Route::view('cart', 'cart')->name('cart');
            Route::get('cart/{product}', function (Product $product) {

                $productt = auth()->user()->carts()->create(['basket_itemid' => $product->id, 'basket_quantity' => 1]);
                if ($productt) {
                    return redirect(route('cart'));
                }
                abort(500);
            })->name('cart.save');

            Route::get('cart/{id}/destroy', function ($id) {
                $product = auth()->user()->carts()->find($id);
                if ($product->delete()) {
                    return redirect()->back();
                }
                abort(500);
            })->name('cart.destroy');
            // end carts

            Route::get('/logout', function () {
                Auth::logout();

                return redirect()->back();
            })->name('logout');
            // wishlist //
            Route::view('wishlist', 'wishlist')->name('wishlist');
            // save
            Route::get('/wishlist/{product}', function (Product $product) {
                $fav = auth()->user()->favorites()->create(['favorite_itemid' => $product->id]);
                if ($fav) {
                    return redirect(route('wishlist'));
                }
                abort(500);
            })->name('wishlist.save');
            // destroy wishlist
            Route::get('/wishlist/{id}/destroy', function ($id) {
                // $fav = auth()->user()->favorites()->where('basket_id', $id)->get();
                $fav = Favorite::where('favorite_id', $id)->get()[0];

                if ($fav->delete()) {
                    return redirect()->back();
                }
                abort(500);
            })->name('wishlist.destroy');
            // end wishlist
        });
        Route::post('/product/price', function (Request $request) {
            $min = $request['min'];
            $max = $request['max'];
            $amount = [
                'min' => $min,
                'max' => $max,
            ];

            return redirect()->back()->with('amount', $amount);
        })->name('product.price');
        Route::view('/auction', 'auction')->name('auction');
        Route::middleware('guest')->group(function () {
            Route::view('/login-register', 'login-register')->name('login-register');

            Route::post('signup', function (Request $request) {
                $request->validate([
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'email' => ['required', 'email', 'regex:/..*@(gmail).com/', 'unique:users,user_email'],
                    'password' => 'required',
                    'confirm_password' => 'required|same:password',
                ]);

                $user = User::create([
                    'user_name' => $request->first_name.' '.$request->last_name,
                    'user_email' => $request->email,
                    'user_Referralcode' => Str::random(10),
                    'user_InviteCode' => $request->referalCode,
                    'user_password' => $request->password,
                ]);

                if ($user) {
                    if (auth()->attempt(['user_email' => $request->email, 'password' => $request->password])) {
                        return redirect(route('index'));
                    }
                    abort(500);
                }
            })->name('signup.submit');

            Route::post('signin', function (Request $request) {
                $request->validate([
                    'email' => 'required',
                    'password' => 'required',
                ]);

                if (auth()->attempt(['user_email' => $request->email, 'password' => $request->password], $request->remember_me)) {
                    return redirect(route('index'));
                }

                return redirect()->back()->withErrors(['account' => 'email or password is not correct']);
            })->name('signin.submit');

        });

        Route::fallback(fn () => redirect(route('index')));

    });
