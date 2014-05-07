<?php

class CommentControl extends BaseController
{
	public function addComment()
	{
		$validator = Validator::make(
			Input::all(),
    		array(
    			'comment' => 'required|min:10'
    		) 
		);

		if($validator->fails()){
			return Redirect::to('home')->withErrors($validator);
		}
		else{
			$comment = new Comment();

			$comment->id_post = Input::get('id_post');
			$comment->comment = Input::get('comment');
			$comment->name_user = Input::get('name_user');

			if($comment->save()){
				return Redirect::to('home');
			}
			
		}
		
	}
}
?>