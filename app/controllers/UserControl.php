<?php

class UserControl extends BaseController
{
	public function showUser()
	{
		return View::make('VProfil');
	}
}