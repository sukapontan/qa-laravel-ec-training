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

// カート機能のルーティング(後でログイン制約も追加すること)
Route::post('/:{id}', 'CartController@addCart');
Route::get('/cart', 'CartController@index');
