<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Http\Controllers\Controller;
use App\TutorProfile;
use App\State;
use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UserController extends Controller {
	
	public function __construct()
    {
        $this->middleware('auth');
    }

    // Lawyers
    public function index() {
        
        $data['users'] = User::paginate(30);
        return view('admin/usersList', $data);
    }
	
	   // Update Lawyer Form
    public function editUser($user_id = 0, $tab_type = null) {
        // Get Lawyer Info
        $user = User::find($user_id);
		$tutor = TutorProfile::where('user_id',$user_id)->get();
        switch ($tab_type) {
            case 'address':
                $data['states'] = State::all();
				$data['tutoradds'] = Address::where('user_id',$user_id)->get();
                break;
        }
        $data['user'] = $user;
        $data['tutor'] = $tutor;
        $data['tab_type'] = $tab_type;
        return view('admin/edit-Users', $data);
    }
	
	      // Update Lawyer Into DB
    public function updateUser(Request $request) {
        $user_id = $request->user_id;
        $tab_type = $request->tab_type;
        switch ($tab_type) {
            case 'personal':
                $this->validate($request, ['first_name' => 'required', 'last_name' => 'required']);
                // Create Lawyer Slug
                $user = User::find($user_id);
                $user->firstname = $request->first_name;
                $user->lastname = $request->last_name;
                $info = "Personal info";
                break;
            case 'profile-photo':
                $this->validate($request, ['profile_photo' => 'required']);
                $user = User::find($user_id);
                if ($user->image_url != NULL) {
                    @unlink('public/images/' . $user->image_url);
                }
                $destinationPath = 'public/images'; // upload path
                $extension = Input::file('profile_photo')->getClientOriginalExtension(); // getting image extension
                $fileName = date('dmyhis') . '.' . $extension; // renaming image
                $user->image_url = $fileName;
                Input::file('profile_photo')->move($destinationPath, $fileName); // uploading file to given path
                $info = "Profile photo";
                break;
            case 'contacts':
                $this->validate($request, ['phone' => 'required', 'email' => 'required']);
                $user = User::find($user_id);
                $user->mobile = $request->phone;
                $user->email = $request->email;
                $info = "Contact info";
                break;
            case 'about-you':
                $this->validate($request, ['summary' => 'required']);
                $tutor = TutorProfile::find('user_id',$user_id)->get();
                $tutor->bio = $request->summary;
				$tutor->save();
                $info = "About you";
                break;
        }
        if ($user->save()) {
            return redirect('admin/edit-user-profile/' . $user_id . '/' . $tab_type)->with("success", $info . " updated successfully!");
        } else {
            return redirect('admin/edit-user-profile/' . $user_id . '/' . $tab_type)->with("error", $info . " updation failed!");
        }
    }
	// Delete User From DB
    public function deleteUser($user_id = 0) {
        $user = User::find($user_id);
		$tutor = TutorProfile::where('user_id',$user_id)->get();
		$tutor1 = new TutorProfile;
		if(count($tutor)>0)
		{
			$tutor1 = $tutor[0];
			$tutor1->delete();
		}
		$address = Address::where('user_id',$user_id)->get();
		$address1 =  new Address;
		if(count($address)>0)
		{
			$address1 = $address[0];
			$address1->delete();
		}
		
        if ($user->delete()) {
            return redirect('admin/users')->with("success", "User deleted successfully!");
        } else {
            return redirect('admin/users')->with("error", "User deletion failed!");
        }
    }
	   public function statusDeactivate($user_id = 0)
    {
        $user = User::find($user_id);
        $user->status = 0;
        if($user->save())
        {
            return redirect('admin/users')->with("success", "User De-activated successfully!");
        }else{
            return redirect('admin/users')->with("error", "User De-activation failed!");
        }
    }

    // Lawyer Status Activate
    public function statusActivate($user_id = 0)
    {
        $user = User::find($user_id);
        $user->status = 1;
        if($user->save())
        {
            return redirect('admin/users')->with("success", "User Activated successfully!");
        }else{
            return redirect('admin/users')->with("error", "User activation failed!");
        }
    }
	
}