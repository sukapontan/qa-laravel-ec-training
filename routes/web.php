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

// Authのルーティング

use App\Http\Controllers\UsersController;

Auth::routes();

// topへの画面遷移
Route::get('/', function () {
    return view('top');
});

Route::group(['middleware' => 'auth', 'prefix' => 'users'], function () {
    Route::get('/{id}', 'UsersController@show')->name('users.show');
    Route::get('/{id}/edit', 'UsersController@edit')->name('users.edit');
    Route::put('/{id}', 'UsersController@update')->name('users.update');
    Route::delete('/destroy/{id}', 'UsersController@destroy')->name('users.destroy');
});