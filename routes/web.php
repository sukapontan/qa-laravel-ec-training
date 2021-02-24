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

Route::get('/', 'UsersController@index');

// 新規登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//ログイン後
Route::group(['middleware' => 'auth'], function () {
    Route::get('/top', 'TopController@index')->name('top');
    Route::get('users', 'UsersController@show')->name('users.show');
    Route::get('users/edit/{id}', 'UsersController@edit')->name('users.edit');
    Route::post('users/edit/{id}', 'UsersController@update')->name('users.update');
    Route::post('/', 'UsersController@delete')->name('users.destroy');
    Route::get('products', 'ProductsController@search')->name('products.search');
    Route::get('products/{id}', 'ProductsController@showDetail')->name('detail.product');
    Route::get('cart', 'CartController@indexCart')->name('index.cart');
    Route::post('cart/add', 'CartController@addToCart')->name('add.product');
    Route::post('cart/remove', 'CartController@remove')->name('remove.product');
    Route::get('order_history', 'OrdersController@index')->name('order.date');
    Route::get('orderDetails/{id}', 'OrderDtailsController@show')->name('order.show');
    Route::post('/top', 'OrdersController@delete')->name('order.destroy');
});

Route::post('productInfo/addCart','ProductController@addCart')->name('addcart.post');
