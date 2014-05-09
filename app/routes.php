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
Route::group(array('prefix' => 'api'), function()
	{
		Route::get('post', 'PostController@getIndex');
		Route::post('post', 'PostController@postNew');
		Route::post('post/delete', 'PostController@postDelete');
		Route::post('post/edit', 'PostController@postEdit');
		Route::get('comment', 'CommentController@getComment');
		Route::post('comment', 'CommentController@postComment');
		Route::post('login', 'LoginController@login');
	});

// Route For Web View
Route::get('/', 'IndexController@index');
Route::get('login', function()
				{
				    return View::make('login');
				});

Route::post('comment', 'IndexController@postComment');
Route::get('single/{id}', array('as' => 'single', 'uses' => 'IndexController@singlePost'));

// Route For Admin
Route::group(array('prefix' => 'admin','before' => 'auth'), function()
	{
		Route::get('/', 'IndexController@admin');
		Route::post('login', 'IndexController@login');
		Route::post('update', 'IndexController@postUpdate');
		Route::post('save', 'IndexController@postNew');
		Route::get('comment/delete/{id}', array('as' => 'delete_comment', 'uses' => 'IndexController@deleteComment'));
		Route::get('delete/{id}', array('as' => 'delete', 'uses' => 'IndexController@postDelete'));
		Route::get('edit/{id}', array('as' => 'edit', 'uses' => 'IndexController@getEdit'));
		Route::get('logout','IndexController@logout');
		Route::get('new', function()
				{
				    return View::make('newpost');
				});
	});

