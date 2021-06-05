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

Route::get('/', function () {
    return view('top');
});

Route::prefix('products')->group(function () {
    Route::get('/', 'ProductsController@index')->name('product.index');
    Route::get('{id}', 'ProductsController@show')->name('product.show');
});

// TODO auth認証ミドルウェアを適用する必要がある。
Route::prefix('cart')->group(function () {
    Route::get('/', 'CartController@index')->name('cart.index');
    Route::post('add/{product}', 'CartController@add')->name('cart.add');
    Route::delete('/', 'CartController@delete')->name('cart.destroy');
});

Route::prefix('order')->group(function () {
    Route::post('/', 'OrdersController@store')->name('order.store');
});
