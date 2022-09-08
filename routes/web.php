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

Route::get('/', 'App\Http\Controllers\MainController@home')->name('home');

Route::get('/about','App\Http\Controllers\MainController@about');

Route::get('/contacts', 'App\Http\Controllers\MainController@contacts');

Route::get('/albom', 'App\Http\Controllers\MainController@albom');

Route::get('/kalendar', 'App\Http\Controllers\MainController@kalendar');

Route::get('/auth', 'App\Http\Controllers\MainController@auth');

Route::get('/contacts/all', 'App\Http\Controllers\ContactController@allData')->name('contact-data');

Route::post('/contacts/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');