<?php

class IndexController extends BaseController 
{
	function index()
	{
		$post = Post::with('comments')->orderBy('id', 'DESC')->get();

		return View::make('index',compact('post'));
	}

	function admin()
	{
		$post = Post::with('comments')->orderBy('id', 'DESC')->get();

		return View::make('admin',compact('post'));
	}

	public function postNew()
	{
		$post = new Post();
		$post->title = Input::get('title');
		$post->author = Input::get('author');
		$post->body_content = Input::get('body_content');

		if($post->save()){
			return Redirect::to('/');
		} 
	}

	function postEdit()
	{	
		$id = Input::get('id');
		$post = Post::find($id);
		return View::make('edit',compact('post'));
	}

	public function postUpdate()
	{
		$id = Input::get('id');
		$post = Post::find($id);
		$post->body_content = Input::get('body_content');

		if($post->save()){
			return Redirect::to('/');
		} 
	}

	public function postDelete()
	{
		$id = Input::get('id');
		$post = Post::find($id);

		if($post->delete()){
			return Redirect::to('/');
		}
	}

	public function postComment()
	{
		$comment = new Comment();

		$comment->post_id = Input::get('id_post');
		$comment->comment = Input::get('comment');
		$comment->save();
		return Redirect::to('/');	
	}

	public function login()
	{
		$username = Input::get('username');
		$password = Input::get('password');

		$login = Login::where('username', '=', $username)
					   ->where('password', '=', $password)
					   ->first();

		if($login){
			return Redirect::to('admin');
		} else {
			return Redirect::to('login')->with('message', 'Login Failed, Incorrect Username or Password');
		}	
	}
}