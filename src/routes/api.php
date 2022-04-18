<?php

use App\Http\Controllers\Auth\LoginApiController;
use App\Http\Controllers\Auth\LogoutApiController;
use App\Http\Controllers\Auth\RegisterApiController;
use App\Http\Controllers\ImageController;
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
Route::middleware('auth:sanctum')->post('/logout', [LogoutApiController::class, 'store'])->name('logout');
Route::post('/login', [LoginApiController::class, 'store'])->name('login');
Route::post('/register', [RegisterApiController::class, 'store'])->name('registerapi');
Route::middleware('cors')->get('/images', [ImageController::class, 'index']);

//Products
Route::get('/products', [PostController::class, 'index']);
Route::get('/products/count', [PostController::class, 'count']);
Route::get('/products/{id}', [PostController::class, 'show']);
Route::get('/products/search/{name}', [PostController::class, 'search']);
Route::middleware(['auth:sanctum', 'isAdmin'])->post('/products', [PostController::class, 'store']);
Route::middleware(['auth:sanctum', 'isAdmin'])->put('/products/{id}', [PostController::class, 'update']);
Route::middleware(['auth:sanctum', 'isAdmin'])->delete('/products/{id}', [PostController::class, 'destroy']);


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
