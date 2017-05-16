<?php

use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', function() {
    $a = 2;
    $b = 2;

    return ($a * $b);
});

Route::get('/getTimestamp', function() {
    return time();
});

Route::get('/some', 'TestController@someMethod');
Route::get('/awesome', 'TestController@awesomeMethod');
Route::get('/some2/{name}/{surname?}', 'TestController@someMethod2')->where('name', '[A-Za-z]+');
Route::get('/get/byId/{id}', 'TestController@someMethod2')->where('id', '[0-9]+');

Route::group(['namespace' => 'Admin', 'prefix' => '/admin'], function () {
    Route::get('posts/list', 'PostController@listPosts');
    Route::post('posts/add', 'PostController@addPost');
});

Route::get('posts', 'TestController@showPosts');

/*Route::any('{any}', function() {
    return 'This is default route';
})->where('any', '(.*)?');*/


