<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', 'App\Http\Controllers\HomeController@adminHome')->name('admin.home')->middleware('is_admin');


Route::get('home', 'App\Http\Controllers\ProductsController@index');
Route::get('cart', 'App\Http\Controllers\ProductsController@cart');
Route::get('add-to-cart/{id}', 'App\Http\Controllers\ProductsController@addToCart');
Route::patch('update-cart', 'App\Http\Controllers\ProductsController@update');
Route::delete('remove-from-cart', 'App\Http\Controllers\ProductsController@remove');
Route::get('add', 'App\Http\Controllers\ProductsController@addproduct');
Route::post('newproduct','App\Http\Controllers\ProductsController@newproduct');




Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');