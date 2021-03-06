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

Route::get('/', 'DrinkController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ログインしている人のみがアクセスできるルーティンググループ

Route::group(['middleware' => 'auth'], function () {

    Route::get('/post', 'DrinkController@create')->name('create');
    
    Route::post('/post/store', 'DrinkController@store')->name('store');

});
