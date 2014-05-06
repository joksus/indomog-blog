<?php

class LoginController extends BaseController
{
	public function login()
	{
		$username = Input::get('username');
		$password = Input::get('password');

		$login = Login::where('username', '=', $username)
					   ->where('password', '=', $password)
					   ->first();

		if($login){
			return array(
				'status' => true,
				'email' => $login->email
			);
		} else {
			return array(
			'status' => false
			);
		}		
	}
}