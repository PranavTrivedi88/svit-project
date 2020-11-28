<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::resource('/products', 'ProductController')->middleware('auth');
Route::resource('/orders', 'OrderController')->middleware('auth');
Route::post('/cart/add-to-cart', 'CartController@add_to_cart')->middleware('auth');
Route::get('/cart/count', 'CartController@cart_count')->middleware('auth');
Route::post('/cart/change-quantity/{cart_id}', 'CartController@change_quantity')->middleware('auth');
Route::resource('/cart', 'CartController')->middleware('auth');
