<?php

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

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

// Authのルーティング

use App\Http\Controllers\UsersController;

Auth::routes();

// topへの画面遷移
Route::get('/', function () {
    return view('top');
});
// ユーザー新規登録への画面遷移
Route::get('/signup', function () {
    return view('auth/register');
})->name('signup');

// ユーザー(user)関連のルーティング
Route::group(['middleware' => 'auth', 'prefix' => 'users'], function () {
    Route::get('/{id}', 'UsersController@show')->name('users.show');
    Route::get('/{id}/edit', 'UsersController@edit')->name('users.edit');
    Route::put('/{id}', 'UsersController@update')->name('users.update');
    Route::delete('/destroy/{id}', 'UsersController@destroy')->name('users.destroy');
});

// 商品(product)関連のルーティング
Route::group(['middleware' => 'auth', 'prefix' => 'products'], function () {
    Route::get('/', 'ProductsController@show')->name('products.show');
    Route::get('searchproduct', 'ProductsController@search')->name('searchproduct');
    Route::get('/{id}', 'ProductsController@details')->name('products.details');
});

// 注文(order)関連のルーティング
Route::group(['middleware' => 'auth', 'prefix' => 'orders'], function () {
    Route::get('/{id}/detail', 'OrdersController@show')->name('orders.show');
    Route::get('/{all}', 'OrdersController@index')->name('orders.all');
    Route::get('destroy/{id}', 'OrdersController@destroy')->name('orders.destroy');
});
