<?php

namespace App\Http\Controllers;

use App\User;
use App\TutorProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
use App\Address;
use App\Message;
use Validator;

class StudentController extends Controller
{
	public function index()
	{
		$user = Auth::user();
		$data['msg'] = Message::where('user_id',$user->id)
						->where('read_message',0)
						->get();
		$data['datas'] = User::find($user->id);				

		return view('layouts/dashboard',$data);
	}
	public function studentData()
	{	
		$user = Auth::user();
		$data['datas'] = User::find($user->id);		
		return view('layouts/studentAcc',$data);
	}
	
	public function messageGet()
	{
		$user = Auth::user();
		$data['message'] = Message::where('user_id',$user->id)
						 ->get();
		$data['mssg'] = Message::select('message_body')->where('user_id',$user->id)
						 ->get();			
						
		return view('/layouts/message_page',$data);
	}
	
	public function messageRead()
	{	
		
		$msg_id = $_GET['ajaxid'];
		$msg = Message::find($msg_id);
		$msg->read_message = 1;
		$msg->save();
	}
	public function storeData(Request $request)
	{	
		
		$this->validate($request, ['p_fname' => 'required','p_lname' => 'required','p_mobile' => 'required','p_email' => 'required']);
	//	dd($request->p_password,$request->p_con_pwd);die;
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
				 if($data['password'] != '' && $data['password_confirmation'] != ''){
                    $validate_pwd = Validator::make($data, ['password' => 'required|min:6|confirmed']);
                    if ($validate_pwd->fails())  {  
                        return response()->json(['status'=>'validation_error', 'message'=>'Error.', 'error'=>$validate_pwd->errors()->toArray()], 200);
                    }else{
                        $user1->password = bcrypt($data['password']);
                    }
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
	
		public function messageSend(Request $request)
	{
				$data = $request->all();
				$this->validate($request, ['subject' => 'required','postalcode' => 'required','message' => 'required']);
				$user1 = Address::where('postcode',$data['postalcode'])
								->get();
				if(count($user1)>0){
					$user = Auth::user();	
				foreach($user1 as $user2){
				$message = new Message;
				$message->from_id = $user->id;
				$message->from_name = $user->name;	
				$message->user_id = $user2->user_id;
				$message->regarding_sub = $data['subject'];
				$message->postal_code = $data['postalcode'];
				$message->message_body = $data['message'];
				$message->remember_token = $data['_token'];
				$message->save();
				}
						}else
						{
							return response()->json(['status'=>'error', 'message'=>'Postal Code does not exist'], 200);
						}

		if($message){
			return response()->json(['status'=>'success', 'message'=>'Successful.','data'=>$message], 200);
		}else{
			return response()->json(['status'=>'error', 'message'=>'Error.'], 200);
		}
	}
	
}