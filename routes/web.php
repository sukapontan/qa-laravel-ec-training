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
    return view('welcome');
});

//ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

//ユーザログイン
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login.post');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

//ログイン中
Route::group(['middleware' => 'auth'], function () {
    //ユーザ情報表示
    Route::get('/user/{id}', 'Auth\UserController@show')->name('user.show');
    //ユーザ情報修正
    Route::get('/user/{id}/edit', 'Auth\UserController@edit')->name('user.edit');
    //ユーザ情報更新
    Route::post('/user/{id}', 'Auth\UserController@update')->name('user.update');
    //ユーザ情報削除
    Route::delete('/user/{id}/delete', 'Auth\UserController@destroy')->name('user.destroy');
});

// 商品検索と一覧表示
Route::group(['middleware' => ['auth']], function () {
    Route::get('/products', 'MProductController@index')->name('products.index');
    Route::get('/products/:{id}', 'MProductController@show');
});

// カート追加と一覧表示と購入
Route::group(['middleware' => ['auth']], function () {
    Route::post('/products', 'CartController@addCart');
    Route::get('/cart', 'CartController@showCart');
    Route::post('/cart', 'CartController@purchase');
    Route::get('/completed', function () {
        return view('cart.completed');
    });
});
