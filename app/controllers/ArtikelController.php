<?php

class ArtikelController extends BaseController
{
	public function artikel()
	{
		$validator = Validator::make(
        Input::all(),
        array(
            "title"                 => "required",
            "author"              => "required",
            "body_content"			=> "required",
        )
    );

	if($validator->passes())
	{
		$artikel = new artikel();
    	$artikel->title    = Input::get('title');
    	$artikel->author = Input::get('author');
    	$artikel->body_content = Input::get('body_content');
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