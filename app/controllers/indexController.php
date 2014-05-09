<?php

class IndexController extends BaseController 
{

	public function __construct()
	{
		//$this->beforeFilter('auth.basic', array('on' => 'get'));
	}

	public function index()
	{
		$post = Post::with('comments')->orderBy('id', 'DESC')->get();

		return View::make('index',compact('post'));
	}


	public function singlePost($id)
	{
		$post = Post::find($id);
		return View::make('post',compact('post'));
	}

	public function admin()
	{
			$post = Post::with('comments')->orderBy('id', 'DESC')->get();
			return View::make('admin',compact('post'));
	}

	public function postNew()
	{
		$validator = Validator::make(Input::all(),
			array(
				'title' => 'required',
				'body_content' => 'required'
			)
		);

		if($validator->fails()){
			return Redirect::to('new')->withErrors($validator)->withInput();
		} else {
			$post = new Post();
			$post->title = Input::get('title');
			$post->author = Auth::user()->username;
			$post->body_content = Input::get('body_content');

			if($post->save()){
				return Redirect::to('admin');
			}
		} 
	}

	public function getEdit($id)
	{	
		$post = Post::findOrFail($id);
		return View::make('edit',compact('post'));
	}

	public function postUpdate()
	{
		$id = Input::get('id');
		$post = Post::find($id);
		$post->body_content = Input::get('body_content');

		if($post->save()){
			return Redirect::to('admin');
		} 
	}

	public function postDelete($id)
	{
		$post = Post::find($id);

		if($post->delete()){
			return Redirect::to('admin');
		}
	}

	public function postComment()
	{
		$validator = Validator::make(Input::all(),
			array(
				'comment' => 'required'
			)
		);

		if($validator->fails()){
			$id = Input::get('id_post');
			return Redirect::route('single', array('id' => $id))->withErrors($validator);
		} else {
			$comment = new Comment();
			$comment->post_id = Input::get('id_post');
			$comment->comment = Input::get('comment');
			$comment->save();
			$id = Input::get('id_post');
			return Redirect::route('single', array('id' => $id));
		}	
	}

	public function deleteComment($id)
	{
		$comment = Comment::find($id);
		if($comment->delete()){
			return Redirect::to('admin');
		}
	}

	public function login()
	{
			$validator = Validator::make( Input::all(),
			    array(
			    	'username' => 'required',
			    	'password' => 'required'
			    	) 
			);

			if($validator->fails()){
				return Redirect::to('login')->withErrors($validator)->withInput();
			} else {
				$userdata = array(
					'username' 	=> Input::get('username'),
					'password' 	=> Input::get('password')
				);
				if (Auth::attempt($userdata)) {
					// Auth::user()->username
					return Redirect::intended('admin');
				} else {	 	
				return Redirect::to('login')->with('message', 'Login Failed, Incorrect Username or Password');
				}	
			}
	}
	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}
}