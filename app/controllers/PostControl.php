<?php

class PostControl extends BaseController
{
	public function showAddPost()
	{
		return View::make('VAddPost');
	}

	public function savePost()
	{
		$validator = Validator::make(
			Input::all(),
			
			array(
    			'title' => 'required|min:3',
    			'author' =>'required|min:3',
    			'body_content' => 'required|min:10'
    			)
			);
		if($validator->fails()){
			return Redirect::to('post/add')->withErrors($validator);
		}else{
		$post = new Post();
		$post->title= Input::get('title');
		$post->author = Input::get('author');
		$post->body_content = Input::get('body_content');

		if($post->save()){
			$post = Post::with('comment')->orderBy('id', 'ASC')->get();
			return View::make('VHomeBlog',compact('post'));
		} 

	}
	}

	public function showHome()
	{
		$post = Post::with('comment')->orderBy('id', 'ASC')->get();
		return View::make('VHome',compact('post'));
	}

	public function showHomeBlog()
	{
		$post = Post::with('comment')->orderBy('id', 'ASC')->get();
		return View::make('VHomeBlog',compact('post'));
	}

	public function showEdit()
	{
		$id = Input::get('id');
		$post = Post::find($id);

		return View::make('VPostEdit',compact('post'));
	}

	public function postEdit()
	{
		$validator = Validator::make(
			Input::all(),
			
			array(
    			'body_content' => 'required|min:10'
    			)
			);
		if($validator->fails()){
			return Redirect::to('post/edit')->withErrors($validator);
		}else{
			$id = Input::get('id');
			$post = Post::find($id);

			$post->body_content = Input::get('body_content');
			if($post->save()){
				return Redirect::to('home');
			} 

		}	
	}

	public function postDelete()
	{
		$id = Input::get('id');
		$post = Post::find($id);

		if($post->delete()){
			return array(
				'status' => true
			);
		}

		return array(
			'status' => false
		);
	}
	
}