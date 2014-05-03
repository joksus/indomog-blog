<?php

class PostControl extends BaseController
{
	public function showAddPost()
	{
		return View::make('VAddPost');
	}
}