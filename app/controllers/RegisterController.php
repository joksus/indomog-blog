<?php

class RegisterController extends BaseController
{
	public function register()
	{
		$validator = Validator::make(
        Input::all(),
        array(
            "email"                 => "required|email|unique:users,email",
            "password"              => "required|min:6",
            "password_confirmation" => "same:password",
        )
    );

	if($validator->passes())
	{
		$user = new User;
    	$user->email    = Input::get('email');
    	$user->password = Input::get('password');
    	$user->save();

    return Redirect::to("login")->with('register_success', 'Selamat, Registrasi Berhasil, silakan cek email untuk aktivasi :P');
	}

	else
	{
		return Redirect::to('register')
            ->withErrors($validator)
            ->withInput();
	}
	}
}