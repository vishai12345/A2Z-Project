<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
		public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function index()
	{	
		$id = Auth::id();
		$image = User::find($id);
		return view('layouts/UserProfile',['image' => $image]);
	}
	public function accProfile(){
		
		$id = Auth::id();
		$image = User::find($id);
		return view('layouts/accountProfile',['image' => $image]);
	}
}