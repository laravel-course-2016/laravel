<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'MainController@index')->name('site.main.index');
Route::get('/about.html', 'MainController@about')->name('site.main.about');
Route::get('/feedback.html', 'MainController@feedback')->name('site.main.feedback');
Route::get('/login.html', 'MainController@login')->name('site.auth.login');

Route::get('/post/{id}.html', 'PostController@post')->name('site.posts.post')->where('id', '[\d]+');
