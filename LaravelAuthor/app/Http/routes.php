<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PublicController@index');

Route::get('/works', 'PublicController@works');
Route::get('/works/{work}', 'PublicController@showWork');

Route::get('/blog', 'PublicController@blog');
Route::get('/blog/tagged/{tag}', 'PublicController@showTagged');
Route::get('/blog/{article}', 'PublicController@showArticle');

Route::get('/series', 'PublicController@series');
Route::get('/series/{series}', 'PublicController@showSeries');

Route::get('/about', 'PublicController@about');
Route::get('/contact', 'PublicController@contact');

Route::get('/admin', 'AdminController@home');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    // put routes here I think?
});

Route::auth();
