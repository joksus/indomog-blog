<?php

class PostController extends BaseController 
{
	public function getIndex()
	{
		$post = Post::all();

		$bulkPost = array();

		$i=0;
		foreach($post as $p)
		{
			$bulkPost[$i] = array (
				'id' => $p->id,
				'title' => $p->title,
				'author' => $p->author,
				'body_content' => $p->body_content
			);
			$i++;
		}

		
		return $bulkPost; 
	}

	public function postNew()
	{

		$post = new Post();
		$post->title = Input::get('title');
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

	public function postEdit()
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