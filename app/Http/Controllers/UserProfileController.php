<?php

namespace App\Http\Controllers;

class UserProfileController extends Controller
{
	public function index()
	{
			
		return view('layouts/UserProfile');
	}
	public function accProfile(){
		
		return view('layouts/accountProfile');
	}
}