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

// //Auth
//
// Route::get('auth/login', 'Auth\LoginController@getLogin');
// Route::post('auth/login', 'Auth\LoginController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');
//
// //Registration
//
// Route::get('auth/register', 'Auth\RegisterController@getRegister');
// Route::get('auth/register', 'Auth\RegisterController@postRegister');

Route::get('/', 'PagesController@getIndex');
Route::resource('posts', 'PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
