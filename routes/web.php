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
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//商品検索
Route::get('/products', 'MProductController@index');

//商品紹介
Route::get('/products/:{id}', 'MProductController@show');

Route::group(['middleware' => 'auth'], function () {
    //ユーザ情報表示
    Route::get('/user/{id}', 'Auth\UserController@show')->name('user.show');
    //ユーザ情報修正
    Route::get('/user/{id}/edit', 'Auth\UserController@edit')->name('user.edit');
    //ユーザ情報更新
    Route::put('/user/{id}', 'Auth\UserController@update')->name('user.update');
    //ユーザ情報削除
    Route::delete('/user/{id}', 'Auth\UserController@destroy')->name('user.destroy');

});
