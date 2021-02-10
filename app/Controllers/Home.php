<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo"helo";
		return view('welcome_message');
		
	}

	//--------------------------------------------------------------------

}
