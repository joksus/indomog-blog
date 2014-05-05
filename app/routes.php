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







Route::get('regis','RegistrasiControl@Registrasi');
Route::post('store','RegistrasiControl@store');
Route::get('login', 'LoginControl@showLogin');
Route::post('auth', 'LoginControl@authen');

Route::get('home','PostControl@showHomeBlog');
Route::get('/','PostControl@showHome');
Route::get('post/add', 'PostControl@showAddPost');
Route::post('post/add', 'PostControl@savePost');
Route::get('comment/add', 'CommentControl@addComment');
Route::post('comment/add', 'CommentControl@addComment');
Route::get('pos/edit', 'PostControl@showEdit');
Route::post('pos/edit', 'PostControl@editPost');
Route::get('edit', array('as' => 'edit', 'uses' => 'PostControl@showEdit'));
