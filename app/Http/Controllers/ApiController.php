<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Cart;
use App\Models\Category;
use App\Models\ClientsDesign;
use App\Models\Design;
use App\Models\Order;
use App\Models\Product;
use App\Models\PromoCode;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
        /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'signUp','category', 'product', 'subCategory', 'allAuctions', 'productShow']]);
    }
    /**
     * @unauthenticated
     */
    public function category() {
        return response([
            Category::with('subCategory')->get(),
        ]);
    }
        /**
     * @unauthenticated
     */
    public function subCategory() {
        return response([
            SubCategory::with('category')->get(),
        ]);
    }
        /**
     * @unauthenticated
     */
    public function product() {
        return response([
            Product::with(['subCategory'])->get(),
        ]);
    }
        /**
     * @unauthenticated
     */
    public function productShow(Request $request) {
        return response([
            Product::where('id', $request->id)->with(['subCategory'])->get(),
        ]);
    }
    public function CartAdd($productId) {
        Cart::create([
            'user_id' => auth('api')->user()->id,
            'product_id'=> $productId,
        ]);
        return response([
            'message'=> 'Product Added To Cart Successfully',
            'status' => 200,
        ]);
    }    
    
    public function ShowUserCart() {
        return response([
            'data'=> Cart::where('user_id', auth('api')->user()->id)->with('product')->get()->pluck('product'),
            'status' => 200,
        ]);
    }
    public function DesignsClientAdd(Request $request) {
        $request->validate([
            'image' => 'required|file|mimes:jpeg,png,jpg,gif', 
        ]);
    
        $userId = auth('api')->user()->id;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $userId . '.' . $image->getClientOriginalExtension();
            $image->storeAs('/allImages', $imageName);
        }
    
        ClientsDesign::create([
            'user_id' => $userId,
            'image' => '/allImages/' . $imageName, 
        ]);
        return response([
            'message'=> 'Design Uploaded Successfully',
            'status'=>200,
        ]);
    }
    public function checkPromoCode(Request $request) {
        $request->validate([
            'code' => 'required', 
        ]);
        $promoCode = $request->code;
        $promo = PromoCode::where('code', $promoCode)->first();
        
        if($promo) {
            return response ([
                'data' => $promo,
                'status' => 200,
            ]);
        }else {
            return response ([
                'status' => 404,
            ]);
        }
    }
    /**
     * @unauthenticated
     */
    public function AllAuctions(Request $request) {
        return response ([
            'data'=> Auction::all(),
            'status' => 200,
        ]);
    }
    public function ShowAuctions($id) {
        if(Auction::find($id)) {
            return response ([
                'data'=> Auction::find($id),
                'status' => 200,
            ]); 
        }else {
            return response ([
                'status' => 404,
            ]); 
        }

    }
    public function Order(Request $request) {
        $request->validate([
            'promoCode_id' => 'nullable',
            'product_id' => 'required',
            'full_name' => 'required|string',
            'address' => 'required|string',
            'notes' => 'required|string',
            'total' => 'required'
        ]);
        Order::create([
            'promoCode_id' => $request->promoCode_id,
            'product_id' => $request->product_id,
            'full_name' => $request->full_name,
            'address' => $request->address,
            'notes' => $request->notes,
            'total' => $request->total,
            'status' => 'pending'
        ]); 
        return response([
            'message' => 'Order Created Successfully',
            'status' => 200,
        ]);
    }
    public function OrderShow(Request $request , $id) {
        return response([
            'data' => Order::find($id),
            'status' => 200,
        ]);
    }
    public function Designs() {
        return response([
            'data' => Design::all(),
            'status' => 200,
        ]);
    }
    public function AuctionBid(Request $request, $id) {
        $Auction = Auction::find($id);
        $request->validate([
            'bid' => 'required',
        ]);
        if($request->bid <= $Auction->highest_bid || $request->bid <= $Auction->started_bid){
            return response([
                'message' => 'Please Enter A Bid More Than The Highest Bid',
                'status' => 400,
            ]);
        }else {
            $Auction->highest_bid = $request->bid;
            $Auction->update();
            return response([
                'message' => 'Bid Successfully',
                'status' => 200,
            ]);
        }
    }
    public function signUp(Request $request) {
        $request->validate([
            'name'=> 'required|string',
            'email' => 'required|email',
            'full_name' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
            'date' => 'required',
            'password' => 'required|min:8',
        ]);
        User::create([
            'name' => $request->name,
            'email'=>$request->email,
            'full_name'=>$request->full_name,
            'phone_number'=>$request->phone_number,
            'gender'=>$request->gender,
            'date'=>$request->date,
            'password' => $request->password,
        ]);
        return response([
            'message' => 'User Created Successfully',
            'status' => 200,
        ]);
    }
    /**
     * @unauthenticated
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = request(['email', 'password']);

        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
       /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
        /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */

}
