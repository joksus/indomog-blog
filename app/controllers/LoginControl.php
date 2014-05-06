<?php

class LoginControl extends BaseController
{
	public function showLogin()
	{
		
		return View::make('VLogin');
	}

	public function authen()
	{
		$validator = Validator::make(
			Input::all(),
    		array(
    			'username' => 'required|min:3',
    			'password' => 'required|min:6'
    		) 
		);

		if($validator->fails()){
			return Redirect::to('login')->withErrors($validator);
		} else {
			
			$username = Input::get('username');
			$password = Input::get('password');

			$login = Login::where('username', '=', $username)
					   ->where('password', '=', $password)
					   ->first();

			if($login){
				return Redirect::to('home');
			} else {
				return Redirect::to('login')
					->with('pesan','username atau password salah');
			}
		}
		
	}
}