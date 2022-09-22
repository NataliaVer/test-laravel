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

Route::get('/blog-all', 'App\Http\Controllers\PostController@blog')->name('blog-all');

Route::post('/blog-all/store', 'App\Http\Controllers\PostController@store')->name('posts-store');

Route::put('/blog-all/update/{id}', 'App\Http\Controllers\PostController@update')->name('posts-update');

Route::get('/create', 'App\Http\Controllers\PostController@create')->name('create');

Route::get('/edit/{id}', 'App\Http\Controllers\PostController@edit')->name('edit');

Route::get('/calendar', 'App\Http\Controllers\EventController@index');

Route::post('/calendar/action', 'App\Http\Controllers\EventController@action');

Route::get('/auth', 'App\Http\Controllers\MainController@auth');

Route::get(
    '/contacts/all/{id}',
    'App\Http\Controllers\ContactController@showOneMessage'
)->name('contact-data-one');

Route::get(
    '/contacts/all/{id}/update',
    'App\Http\Controllers\ContactController@updateMessage'
)->name('contact-update');

Route::post(
    '/contacts/all/{id}/update',
    'App\Http\Controllers\ContactController@updateMessageSubmit'
)->name('contact-update-submit');

Route::get(
    '/contacts/all/{id}/delete',
    'App\Http\Controllers\ContactController@deleteMessage'
)->name('contact-delete');

Route::get('/contacts/all', 'App\Http\Controllers\ContactController@allData')->name('contact-data');

Route::post('/contacts/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');