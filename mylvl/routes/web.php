<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\EshopController@index')->name('welcome');
Route::get('/abouts', 'App\Http\Controllers\EshopController@about')->name('about');
Route::get('/contact', 'App\Http\Controllers\EshopController@contact')->name('contact');
Route::get('/createaccount', 'App\Http\Controllers\RegisterController@create')->name('create_account-get');
Route::post('/createaccount', 'App\Http\Controllers\RegisterController@store')->name('create_account-post');
Route::get('/basket', 'App\Http\Controllers\EshopController@basket')->name('basket');
Route::get('/products', 'App\Http\Controllers\EshopController@products')->name('products');

Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/login/checklogin', 'App\Http\Controllers\LoginController@checklogin')->name('checklogin');
Route::get('login/successlogin', 'App\Http\Controllers\LoginController@successlogin');
Route::get('login/logout', 'App\Http\Controllers\LoginController@logout');
//Route::get('/register', 'App\Http\Controllers\RegisterController@register')->name('register');
//Route::post('/inscription', 'App\Http\Controllers\RegisterController@getRegister');