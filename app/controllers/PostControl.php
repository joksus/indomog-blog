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
			return array(
				'status' => true
			);
		} 

		return array(
			'status' => false
		);

	}
	
}