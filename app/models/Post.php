<?php

class Post extends Eloquent
{
	protected $table = 'post';

	public function comment()
	{
		return $this->hasMany('Comment','id_post');
	}
}