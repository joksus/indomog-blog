<?php

class RegistrasiControl extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function Registrasi()
	{
		return View::make('VRegister');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(
			Input::all(),
			
			array(
    			'username' => 'required|min:3',
    			'password' =>'required|min:6',
    			'email' => 'required|email'
    			)
			);
		if($validator->fails()){
			return Redirect::to('register')->withErrors($validator)
										->withInput();
		}else{
			$regist = new Login();
			$regist->username=Input::get('username');
			$regist->password=Hash::make(Input::get('password'));
			$regist->email=Input::get('email');

			if($regist->save() ){
				return Redirect::to('login')->with('pesan','Registrasi berhasil');
			}else{
				return Redirect::to('register')->with('pesan','Registrasi berhasil');
			}

		}	
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
