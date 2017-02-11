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
		$data = TutorProfile::where('user_id',$id)->get();
		$data1 = new TutorProfile;
		if(count($data)>0){
			$data1 = $data[0];
		}
		$data1->user_id = $id;
		$data1->tagline = $request->tagline;
		if($data1->save()){
			return response()->json(['status'=>'success', 'message'=>'Successful.','data'=>$data1], 200);
		}else{
			return response()->json(['status'=>'error', 'message'=>'Error.'], 200);
		}
		
	//	$tag  = $data['tagline'];
		
		
	}
	public function tutorInfo(Request $request)
	{	
		$this->validate($request, ['p_fname' => 'required','p_lname' => 'required','p_mobile' => 'required','p_email' => 'required']);
		
		$data = $request->all();
			$id = Auth::id();
			$user = User::where('id',$id)->get();
			$user1 = new User;
			$add = Address::where('user_id',$id)->get();
			$add1 = new Address;
			if(count($add)>0)
			{
			$add1 = $add[0];
			}	
				$add1->user_id = $id;
				$add1->street = $data['street'];
				$add1->city = $data['town'];
				$add1->country = $data['country'];
				$add1->postcode  = $data['postcode'];
				$add1->remember_token = $data['_token'];
				$add1->save();
				
				if(count($user)>0)
				{
				$user1 = $user[0];
				}	
				$user1->firstname = $data['p_fname'];
				$user1->lastname = $data['p_lname'];
				$user1->mobile = $data['p_mobile'];
				$user1->save();
				
				if($add1->save() && $user1->save())
				{
					return response()->json(['status'=>'success', 'message'=>'Successful.','add' => $add1, 'user' => $user1], 200);
				}else{
					return response()->json(['status'=>'error', 'message'=>'Error.'], 200);
					
				}
	}
	public function tutorbio(Request $request)
	{	
		$id = Auth::id();
		$data = TutorProfile::where('user_id',$id)->get();
		$data1 = new TutorProfile;
		if(count($data)>0){
			$data1 = $data[0];
		}
		$data1->user_id = $id;
		$data1->bio = $request->bio;
		if($data1->save()){
			return response()->json(['status'=>'success', 'message'=>'Successful.','data'=>$data1], 200);
		}else{
			return response()->json(['status'=>'error', 'message'=>'Error.'], 200);
		}	
	}
}



