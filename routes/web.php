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


Route::get('/', 'AuthController@login');
Route::get('/login', 'AuthController@login')->name('login');
Route::get('/reset', 'AuthController@reset')->name('reset');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'AuthController@home')->name('home');
    Route::get('/logout', 'AuthController@logout')->name('logout');
});
*/

Route::get('/{any}', 'HomeController@index')->where('any', '.*');
