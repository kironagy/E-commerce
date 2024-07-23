<?php

use App\Http\Controllers\ApiController;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::post('/signUp', [ApiController::class, 'signUp']);
// Route::post('/login', [ApiController::class, 'login']);

// //Categories
// Route::get('/categories', [ApiController::class, 'subCategory']);
// Route::get('/subCategories', [ApiController::class, 'category']);

// //Products
// Route::get('/products', [ApiController::class, 'product']);
// Route::get('/products/buy/{id}', [ApiController::class, 'productShow']);

// //Promo
// Route::get('/promoCode/check', [ApiController::class, 'checkPromoCode']);
// //Auctions
// Route::get('/Auctions/All', [ApiController::class, 'AllAuctions']);
// Route::post('/Auctions/Bid/{id}', [ApiController::class, 'AuctionBid']);
// Route::get('/Auctions/Show/{id}',[ApiController::class, 'ShowAuctions']);
// //order
// Route::post('/Order', [ApiController::class, 'Order']);
// Route::post('/OrderShow/{id}', [ApiController::class, 'OrderShow']);
// //Designs
// Route::get('Designs', [ApiController::class, 'Designs']);
// Route::post('/DesignsClient/Add',[ApiController::class, 'DesignsClientAdd']);
// //cart
// Route::post('/Cart/Add/{productId}', [ApiController::class, 'CartAdd']);
// Route::get('/ShowUserCart',[ApiController::class, 'ShowUserCart']);
