<?php

class Post extends Eloquent
{
	protected $table = 'post';


	public function comments()
	{
		return $this->hasMany('Comment', 'post_id');
	}

}