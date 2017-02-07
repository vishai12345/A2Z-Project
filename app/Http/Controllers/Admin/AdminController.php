<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller {

    // Class Constructor
    public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function adminIndex(){
		
			return redirect('/admin/goUser');
	}
	
    // Admin Profile
    public function adminProfile() {
        $data['user'] = Auth::user();
        return view('admin/admin-profile', $data);
    }

    // Admin Password
    public function adminChangePassword() {
        return view('admin/change-password');
    }

    // Update Admin Profile
    public function updateAdminProfile(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|max:255'
        ]);
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        if ($user->save()) {
            return redirect('/admin/goUser',$user)->with('success_msg', 'Your profile has been updated successfully.');
        }
        return redirect('/admin/goUser')->with('error_msg', 'Your profile updation failed.');
    }

    // Update Admin Password
    public function updateAdminPassword(Request $request) {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);
        $user = Auth::user();
        $check = Hash::check($request->old_password, $user->password);
        if (!$check) {
            return redirect('admin/change-password')->with('error_msg', 'You entered wrong old password.');
        }
        $user->password = bcrypt($request->password);
        if ($user->save()) {
            return redirect('admin/change-password')->with('success_msg', 'Your password has been changed successfully.');
        }
        return redirect('admin/change-password')->with('error_msg', 'Your password has not been changed. Please try again');
    }
}
