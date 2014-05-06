<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('post', 'PostController@getIndex');
Route::post('post', 'PostController@postNew');
Route::post('post/delete', 'PostController@postDelete');
Route::post('post/edit', 'PostController@postEdit');

Route::get('comment', 'CommentController@getComment');
Route::post('comment', 'CommentController@postComment');

Route::post('login', 'LoginController@login');
Route::get('/register', function()
{
	return View::make('register');
});


Route::post('register', 'RegisterController@register');


Route::get('/login', function()
{
	return View::make('login');
});

Route::post('login', 'LoginController@login');



Route::get('/artikel', function()
{
	return View::make('artikel');
});

Route::post('artikel', 'ArtikelController@artikel');
