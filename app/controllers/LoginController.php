<?php

class LoginController extends BaseController
{
	public function login()
	{
		$validator = Validator::make(
        Input::all(),
        array(
            "email"                 => "required",
            "password"              => "required",
        )
        );

		$email = Input::get('email');
		$password = Input::get('password');

		$login = Login::where('email', '=', $email)
					   ->where('password', '=', $password)
					   ->first();

		if($login){
			return Redirect::to("artikel");


		} 
		else {
			return Redirect::to("login")
            ->withErrors($validator)
            ->withInput();
		}

		

		
	}
}