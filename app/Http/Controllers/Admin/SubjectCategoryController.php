<?php

namespace App\Http\Controllers\Admin;

use App\SubjectCategory;
use App\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubjectCategoryController extends Controller {

	public function __construct()
    {
        $this->middleware('auth');
    }
	
	
	public function index(){

		$subject['sub'] = Subject::all();
		return view('admin/subject_category',$subject);
	}
	
	public function indexSubjectCat() {
        $data['subjects'] = SubjectCategory::paginate(15);
		$data['page_type'] = 'subjectCats';
        return view('admin/subcats', $data);
    }
	
	public function getSubjectCat($id){
		
		$subject['subject'] = SubjectCategory::where('id',$id)
				->get();
		$subject['sub'] = Subject::all();		
		return view('admin/edit-subjectCat',$subject);	
	}
	
	public function subjectCatEntry(Request $request){
		
		$data = $request->all();
		$subjects = Subject::select('subject_name')->where('id', $data['subject_id'])
												   ->get();
		foreach($subjects as $subject)
		{

			SubjectCategory::create([
            'subject_id' => $data['subject_id'],
            'subject_name' => $subject['subject_name'],
            'category_name' => $data['category_name'],
			'remember_token' => $data['_token'],
			
        ]);
		}			   
			
		
		return redirect ('admin/subjectCats')->with('success_msg', 'Subject category is Added.');
	}
	
	// Delete Subject From DB
    public function deleteSubjectCat($subject_id = 0) {
        $subject = SubjectCategory::find($subject_id);
		
        if ($subject->delete()) {
            return redirect('admin/subjectCats')->with("success_msg", "Subject deleted successfully!");
        } else {
            return redirect('admin/subjectCats')->with("error", "Lawyer deletion failed!");
        }
    }
	public function subjectCatEdit(Request $request){
		
		$data = SubjectCategory::find($request->id)
						->update(['category_name'=> $request->category_name]);
						
		return redirect ('admin/subjectCats')->with('success_msg', 'Subject is updated.');
	}
	
}
