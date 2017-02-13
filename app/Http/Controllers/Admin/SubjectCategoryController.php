<?php

namespace App\Http\Controllers\Admin;

use App\SubjectCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubjectCategoryController extends Controller {

	public function __construct()
    {
        $this->middleware('auth');
    }
	
	
	public function index(){
		return view('admin/subject_category');
	}
	
	public function indexSubjectCat() {
        $data['subjects'] = SubjectCategory::paginate(15);
		$data['page_type'] = 'subjectCats';
        return view('admin/subcats', $data);
    }
	
	public function getSubjectCat($id){
		
		$subject = SubjectCategory::where('id',$id)
				->get();
				
		return view('admin/edit-subjectCat',['subject'=>$subject]);	
	}
	
	public function subjectCatEntry(Request $request){
		
		$data = $request->all();
		
			SubjectCategory::create([
			'id' => $data['id'],
            'subject_id' => $data['subject_id'],
            'category_name' => $data['category_name'],
			'remember_token' => str_random(10),
			
        ]);
		
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
