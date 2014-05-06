<?php

class RegisterController extends BaseController
{
	public function register()
	{
		$validator = Validator::make(
        Input::all(),
        array(
            "username"               => "required",
            "password"              => "required|min:6",
            "email"                 => "required|email|unique:users,email",
            "password_confirmation" => "same:password",
        )
    );

	if($validator->passes())
	{
		$user = new User;
        $user->username    = Input::get('username');
        $user->password = Input::get('password');
    	$user->email    = Input::get('email');
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