<?php

class LoginControl extends BaseController
{
	public function showLogin()
	{
		return View::make('VLogin');
	}

	public function authen()
	{
		$username = Input::get('username');
		$password = Input::get('password');

		$login = Login::where('username', '=', $username)
					   ->where('password', '=', $password)
					   ->first();

		if($login){
			return Redirect::to('post');
		} else {
			return Redirect::to('login')->with('pesan','Login gagal,username atau password salah');
		}
	}
}