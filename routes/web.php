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

// 商品検索と一覧表示のルーティング(後でログイン制約も追加すること)
Route::get('/products', 'MProductController@index')->name('products.index');
Route::get('/products/:{id}', 'MProductController@show');

// カート追加と一覧表示のルーティング(後でログイン制約も追加すること)
Route::post('/products', 'CartController@addCart');
Route::get('/cart', 'CartController@showCart');
