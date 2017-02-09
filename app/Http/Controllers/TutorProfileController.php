<?php

namespace App\Http\Controllers;

use App\User;
use App\TutorProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use App\Address;

class TutorProfileController extends Controller
{
		public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function index()
	{	
		$id = Auth::id();
		$image['user'] = User::find($id);
		$image['data'] = TutorProfile::where('user_id',$id)->get();
		return view('layouts/UserProfile',$image);
	}
	public function accProfile(){
		
		$id = Auth::id();
		$image['user'] = User::find($id);
		$image['data'] = Address::where('user_id',$id)->get();
		$image['bio'] = TutorProfile::where('user_id',$id)->get();
		return view('layouts/accountProfile',$image);
	}
	
	public function tagLine(Request $request)
	{	
		$id = Auth::id();
		$data = $request->all();
		$usertag = TutorProfile::where('user_id',$id)->get();
		foreach($usertag as $user)
		{
			$user['tagline'] = $data['tagline'];
			$user->save();
		}
		$tag  = $data['tagline'];
		return response::json('success');
		
	}
	public function tutorInfo(Request $request)
	{	
		$this->validate($request, ['p_fname' => 'required','p_lname' => 'required','p_mobile' => 'required','p_email' => 'required']);
		
		$data = $request->all();
			$id = Auth::id();
			$user = User::where('id',$id)->get();
			$add = Address::where('user_id',$id)->get();
			foreach($add as $adds)
			{
				$adds->street = $data['street'];
				$adds->city = $data['town'];
				$adds->country = $data['country'];
				$adds->postcode  = $data['postcode'];
				$adds->save();
			}
			foreach($user as $users)
			{
				$users->firstname = $data['p_fname'];
				$users->lastname = $data['p_lname'];
				$users->mobile = $data['p_mobile'];
				$users->save();
			}
			return response::json('success');
	}
	public function tutorbio(Request $request)
	{	
		$this->validate($request, ['bio' => 'required']);
		
		$data  = $request->all();
		$id = Auth::id();
		$user = TutorProfile::where('user_id',$id)->get();
		foreach($user as $users)
		{
			$users->bio = $data['bio'];
			$dd = $users->save();
		}
		if($dd)
		{
			return response::json('success');
		}else
		{
			return response::json('error');
		}
		
	}
}



