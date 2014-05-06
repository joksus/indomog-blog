<?php

class ArtikelController extends BaseController
{
	public function artikel()
	{
		$validator = Validator::make(
        Input::all(),
        array(
            "judul"                 => "required",
            "isi"              => "required",
        )
    );

	if($validator->passes())
	{
		$artikel = new artikel();
    	$artikel->judul    = Input::get('judul');
    	$artikel->isi = Input::get('isi');
    	$artikel->save();
		
		return Redirect::to("artikel");
	}

	else
	{
		return Redirect::to('artikel')
            ->withErrors($validator)
            ->withInput();
	}
	}
	
}