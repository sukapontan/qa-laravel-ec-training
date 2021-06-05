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

Route::prefix('products')->group(function () {
    Route::get('/', 'ProductsController@index')->name('product.index');
    Route::get('{id}', 'ProductsController@show')->name('products.show');
});

Route::get('orderHistory{all}', 'OrdersController@index')->name('order.index');
Route::get('orderHistory{three}', 'OrdersController@index')->name('order.threeSeach');
