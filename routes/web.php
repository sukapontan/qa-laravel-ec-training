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
    Route::get('users/users', 'UsersController@show')->name('users.show');
    // Route::get('users/users/{id}/edit', 'UsersController@edit')->name('user.edit');
    // Route::post('users/users/{id}/edit', 'UsersController@update')->name('user.update');
    // Route::destroy('/', 'UsersController@destroy')->name('user.delete');
});

//商品詳細画面
Route::get('product/show', 'ProductController@show')->name('product/show');
//エラー
Route::get('product/index', 'ProductController@index')->name('product/index');
//カート画面
Route::get('cart/show', 'CartController@show')->name('cart/show');
//カートエラー
Route::get('cart/index', 'CartController@index')->name('cart/index');
