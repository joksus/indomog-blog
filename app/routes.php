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
// Route for API
Route::get('post', 'PostController@getIndex');
Route::post('post', 'PostController@postNew');
Route::post('post/delete', 'PostController@postDelete');
Route::post('post/edit', 'PostController@postEdit');

Route::get('comment', 'CommentController@getComment');
Route::post('comment', 'CommentController@postComment');

Route::post('login', 'LoginController@login');
// Route For Web View
Route::get('/', 'IndexController@index');
Route::get('admin', 'IndexController@admin');
Route::get('new', function()
				{
				    return View::make('newpost');
				});
Route::get('login', function()
				{
				    return View::make('login');
				});
Route::post('web/new', 'IndexController@postNew');
Route::post('web/comment', 'IndexController@postComment');
Route::post('web/update', 'IndexController@postUpdate');
Route::post('web/login', 'IndexController@login');
Route::get('delete', array('as' => 'delete', 'uses' => 'IndexController@postDelete'));
Route::get('edit', array('as' => 'edit', 'uses' => 'IndexController@postEdit'));
