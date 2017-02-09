<?php

namespace App\Http\Controllers\Admin;

use App\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller {

	public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function index(){
		
		$role = Auth::user()->role;
		
		if($role == 'admin'){
			return view('admin/subject');
		}else{return redirect('/');}
			
	}
	
	public function indexSub() {
		
		$role = Auth::user()->role;
		
		if($role == 'admin'){
			 $data['subjects'] = Subject::paginate(15);
        return view('admin/subjects', $data);
		}else{
       return redirect('/');
		}
    }
	
	public function getSubject($id){
		
		$subject = Subject::where('id',$id)
				->get();
				
		return view('admin/edit-subject',['subject'=>$subject]);	
	}
	
	public function subjectEntry(Request $request){
		
		$data = $request->all();
		
			Subject::create([
            'subject_name' => $data['subject_name'],
            'id' => $data['id'],
			'remember_token' => str_random(10),
			
        ]);
		return redirect ('admin/subjects')->with('success_msg', 'Subject is Added.');
	}
	
	// Delete Subject From DB
    public function deleteSubject($subject_id = 0) {
        $subject = Subject::find($subject_id);
		
        if ($subject->delete()) {
            return redirect('admin/subjects')->with("success_msg", "Subject deleted successfully!");
        } else {
            return redirect('admin/subjects')->with("error", "Lawyer deletion failed!");
        }
    }
	public function subjectEdit(Request $request){
		
		$data = Subject::find($request->id)
						->update(['subject_name'=> $request->subject_name]);
						
		return redirect ('admin/subjects')->with('success_msg', 'Subject is updated.');
	}
	
}