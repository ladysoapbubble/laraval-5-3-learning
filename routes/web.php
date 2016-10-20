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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', 'PageController@contact');
Route::get('/about', 'PageController@about');


Route::resource('articles', 'ArticlesController');
Route::resource('tags', 'TagsController');
Route::resource('auth', 'Auth\AuthController');


Auth::routes();