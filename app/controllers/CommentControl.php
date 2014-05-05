<?php

class CommentControl extends BaseController
{
	public function addComment()
	{
		$comment = new Comment();

		$comment->id_post = Input::get('id_post');
		$comment->comment = Input::get('comment');

		if($comment->save()){
			return Redirect::to('home');
		}
		return array(
			'status' => false
		);
	}
}
?>