<?php

use App\Http\Controllers\Auth\LoginApiController;
use App\Http\Controllers\Auth\LogoutApiController;
use App\Http\Controllers\Auth\RegisterApiController;
use App\Http\Controllers\PostController;
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


Route::middleware('auth:sanctum')->get('/products',[PostController::class,'index'])->name('products');
Route::post('/products',[PostController::class,'store']);
Route::get('/products/{id}',[PostController::class,'show']);
Route::put('/products/{id}',[PostController::class,'update']);
Route::delete('/products/{id}',[PostController::class,'destroy']);
Route::get('/products/search/{name}',[PostController::class,'search'])->name('search');
Route::middleware('auth:sanctum')->post('/logout',[LogoutApiController::class,'store'])->name('logout');

Route::post('/login',[LoginApiController::class,'store'])->name('login');

Route::post('/register',[RegisterApiController::class,'store'])->name('registerapi');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
