<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\message;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

	 
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {  
		if($data['role'] == 'tutor'){
            return Validator::make($data, [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:6|confirmed',
            ]);
        }else if($data['role'] == 'student'){
            return Validator::make($data, [
                'firstname' => 'required|max:255',
                'lastname' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:6',
            ]);
        }  
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {   
        if($data['role'] == 'tutor'){
            return User::create([
                'name' => $data['name'],
                'firstname' => '',
                'lastname' => '',
                'mobile' => '',
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'role' => $data['role'],
				'status'=>$data['status'],
				'image_url' => '',
				'verification_code'=> $data['verification_code'],
            ]);
        }else if($data['role'] == 'student'){
			
            return User::create([
                'name' => $data['firstname'] .' '. $data['lastname'],
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'mobile' => $data['mobile'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'role' => $data['role'],
				'status'=>$data['status'],
            ]);
        }
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {   
			$data = $request->all();
            $validation = $this->validator($request->all());

        if ($validation->fails())  {  
            return response()->json($validation->errors()->toArray());
        } else{
            $user = $this->create($request->all());
			if($user->role == 'student'){
				if (Auth::attempt(['email' =>$request->email, 'password' => $request->password]))
					{	
					//
			if(!($this->validate($request, ['subject' => 'required','postal_code' => 'required','message' => 'required']))){ 
				
				$msg1 = $this->messageSys($request->all());
				if($msg1 == 1){
					return response()->json(['status'=>'success', 'role'=>$user->role, 'message'=>'Auth Successfully.'], 200);}
				}
					}
					
			} else{
				$verification_code =  $user['verification_code'];
			$title = "Hi";
			$content = "verify Your Account Please click this link to activate your account:";
			$email = $user->email;
			Mail::send('usershow', ['title' => $title, 'content' => $content, 'verification_code' => $verification_code], function ($message)
        {
            $message->from('vc121356@gmail.com', 'vishal chaturvedi');
            $message->to('vc121@gmail.com');
            $message->subject("Hello from Scotch");

        });		
            return $this->registered($request, $user)
            ?:response()->json(['status'=>'success', 'role'=>$user->role, 'message'=>'Auth Successfully.'], 200);
			}
			
			}
    }
	
	public function verifyUser($id){
		
		User::where('verification_code',$id)
			 ->update(['status' => 1]);
			 
			return redirect ('/gouser');
	}
	
	 public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);
        //$credentials = $this->getCredentials($request);
        $user = User::whereEmail($request->email)->first();
		 if (!$user) {
            return response()->json(['status'=>'error', 'message'=>'This E-mail address is not registered with us.'], 200);
        }
        if ($user->status== '1') {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                // Check if Admin
                if($user->role == "admin") {
					 return response()->json(['status'=>'success', 'role'=>$user->role, 'message'=>'Auth Successfully.'], 200);
                } else if($user->role == "tutor"){
					 return response()->json(['status'=>'success', 'role'=>$user->role, 'message'=>'Auth Successfully.'], 200);
                }else if($user->role == "student"){
					 return response()->json(['status'=>'success', 'role'=>$user->role, 'message'=>'Auth Successfully.'], 200);
                }else{
					return response()->json('error');
				}
            } else {
                return response()->json(['status'=>'error', 'message'=>'Invalid email or password. Please try again.'], 200); 
            }
        } else {
           return response()->json(['status'=>'error', 'message'=>'Your email address has not been verified yet. Please check your email and verify.'], 200); 
        }
    }
	 public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        return redirect('/');
    }
	
	protected function messageSys(array $data)
	{
				$user1 = User::where('role','tutor')
								->Where('status', 1)
								->get();
				if(count($user1)>0){
				foreach($user1 as $user2){
				$user = Auth::user();	
				$message = new Message;
				$message->from_id = $user->id;
				$message->from_name = $user->name;	
				$message->user_id = 252;
				$message->regarding_sub = $data['subject'];
				$message->postal_code = $data['postal_code'];
				$message->message_body = $data['message'];
				$message->remember_token = $data['_token'];
				$message->save();
				}
					}
		        return 1;				
	}
}
