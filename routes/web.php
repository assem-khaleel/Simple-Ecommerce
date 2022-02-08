<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\FrontEndController::class,'index'])->name('index');
Route::get('/product/{id}',[\App\Http\Controllers\FrontEndController::class,'singleProduct'])->name('product.single');
Route::post('/cart/add',[\App\Http\Controllers\ShoppingController::class,'add_to_cart'])->name('cart.add');
Route::get('/cart',[\App\Http\Controllers\ShoppingController::class,'cart'])->name('cart');
Route::get('/cart/delete/{id}',[\App\Http\Controllers\ShoppingController::class,'cart_delete'])->name('cart.delete');
Route::get('cart/incr/{id}/{qty}',[\App\Http\Controllers\ShoppingController::class,'incr'])->name('cart.incr');
Route::get('cart/decr/{id}/{qty}',[\App\Http\Controllers\ShoppingController::class,'decr'])->name('cart.decr');
Route::get('/cart/rapid/add/{id}',[\App\Http\Controllers\ShoppingController::class,'rapid_add'])->name('cart.rapid.add');
Route::get('/cart/checkout',[\App\Http\Controllers\CheckoutController::class,'index'])->name('cart.checkout');
Route::post('/cart/checkout',[\App\Http\Controllers\CheckoutController::class,'pay'])->name('cart.checkout.pay');
Route::resource('products', \App\Http\Controllers\ProductsController::class);
Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class,'index']);























