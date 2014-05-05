<?php

class Comment extends Eloquent
{
	protected $table='comment';

	public function post()
	{
		return $this->belongTo('post','id');
	}
}