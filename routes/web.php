<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ShopController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('categories',CategoryController::class);
Route::resource('shops', ShopController::class);
Route::resource('products', ProductController::class);
Route::resource('cart', CartController::class);
Route::resource('order', \App\Http\Controllers\OrderController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('users', UserController::class);
});
