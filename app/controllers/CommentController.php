<?php

/**
* class CommentController
*/
class CommentController extends BaseController
{
	public function getComment()
	{
		$comment = Comment::all();

		$listComment = array();

		$i=0;

		foreach($comment as $c){
			$listComment[$i] = array (
				'id' => $c->id,
				'id_post' => $c->id_post,
				'comment' => $c->comment
			);
			$i++;
		}

		return $listComment;
	}

	public function postComment()
	{
		$comment = new Comment();

		$comment->id = Input::get('id');
		$comment->id_post = Input::get('id_post');
		$comment->comment = Input::get('comment');
		

		if($comment->save()){
			return array(
				'status' => true
			);
		} 

		return array(
			'status' => false
		);
	}
}