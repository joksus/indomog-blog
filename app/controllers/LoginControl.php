<?php

class LoginControl extends BaseController
{
	public function showLogin()
	{
		return View::make('VLogin');
	}
}