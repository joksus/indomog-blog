<?php

class LoginController extends BaseController
{
	
	public function login()
	{
		$validator = Validator::make(
        Input::all(),
        array(
            'username'                 => 'required',
            'password'             	   => 'required',
        )
        );

		$username = Input::get('username');
		$password = Input::get('password');

		$login = Login::where('username', '=', $username)
					   ->where('password', '=', $password)
					   ->first();

		if($login){
			return Redirect::to('artikel');


		} 
		else {
			return Redirect::to('login')
            ->withErrors($validator)
            ->withInput();
		}

		

		
	}
}