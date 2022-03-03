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

//Auth
Route::middleware('auth:sanctum')->post('/logout',[LogoutApiController::class,'store'])->name('logout');
Route::post('/login',[LoginApiController::class,'store'])->name('login');
Route::post('/register',[RegisterApiController::class,'store'])->name('registerapi');
//Products
Route::middleware('auth:sanctum')->group(function(){
Route::controller(PostController::class)->group(function() {
    Route::get('/products','index');
    Route::post('/products','store');
    Route::get('/products/{id}','show');
    Route::put('/products/{id}','update');
    Route::delete('/products/{id}','destroy');
    Route::get('/products/search/{name}','search');

});
});
