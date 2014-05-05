<?php

class PostControl extends BaseController
{
	public function showAddPost()
	{
		return View::make('VAddPost');
	}

	public function savePost()
	{
		$post = new Post();
		$post->title= Input::get('title');
		$post->author = Input::get('author');
		$post->body_content = Input::get('body_content');

		if($post->save()){
			return View::make('VHomeBlog');
		} 

		return array(
			'status' => false
		);

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
		return View::make('VPostEdit');
	}

	public function editPost()
	{
		$id = Input::get('id');
		$post = Post::find($id);

		$post->body_content = Input::get('body_content');
		if($post->save()){
			return array(
				'status' => true
			);
		} 

		return array(
			'status' => false
		);
	}
	
}