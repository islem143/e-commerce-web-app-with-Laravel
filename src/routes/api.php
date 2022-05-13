<?php

use App\Http\Controllers\Auth\LoginApiController;
use App\Http\Controllers\Auth\LogoutApiController;
use App\Http\Controllers\Auth\RegisterApiController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartProduct;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProductController;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Auth
Route::middleware('auth:sanctum')->post('/logout', [LogoutApiController::class, 'store'])->name('logout');
Route::post('/login', [LoginApiController::class, 'store'])->name('login');
Route::post('/register', [RegisterApiController::class, 'store'])->name('registerapi');

//Products
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/count', [ProductController::class, 'count']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/search/{name}', [ProductController::class, 'search']);
Route::middleware(['auth:sanctum', 'isAdmin'])->post('/products', [ProductController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/products/{id}', [ProductController::class, 'update']);
Route::middleware(['auth:sanctum', 'isAdmin'])->delete('/products/{id}', [ProductController::class, 'destroy']);


Route::middleware(["auth:sanctum"])->group(function () {
    Route::get('/cart', [CartController::class, "index"]);
    Route::get("/cart/{product}", [CartController::class, "show"]);
    Route::post("/cart", [CartController::class, "store"]);
    Route::put("/cart/{product}", [CartController::class, "update"]);
    Route::delete("/cart/{product}", [CartController::class, "destroy"]);
    Route::delete("/cart/", [CartController::class, "clearCart"]);
});




// Route::middleware(['auth:sanctum','isAdmin'])->group(function(){
// Route::controller(PostController::class)->group(function() {
//     Route::get('/products','index');
//     Route::get('/products/{id}','show');
//     Route::get('/products/search/{name}','search');
//     Route::post('/products','store');
//     Route::put('/products/{id}','update');
//     Route::delete('/products/{id}','destroy');
// });
// });
