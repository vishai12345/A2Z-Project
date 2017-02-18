<?php

namespace App\Http\Controllers\Admin;

use App\SubjectSubCat;
use App\Subject;
use App\SubjectCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubjectSubCatController extends Controller {

	public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function indexSub(){
		
		$subject['sub'] = SubjectCategory::all();
		return view('admin/SubjectSubCatEntry',$subject);
	}
	
	public function indexSubjectSubCat() {
        $data['subjects'] = SubjectSubCat::paginate(10);
		$data['page_type'] = 'SubjectSubCategory';
        return view('admin/SubjectSubCats', $data);
    }
	
	public function getSubjectSubCat($id){
		
		$subject = SubjectSubCat::where('id',$id)
				 ->get();
				
		return view('admin/SubjectSubCatEdit',['subject'=>$subject]);
	}
	
	public function SubjectSubCatEntry(Request $request){
		
		$data = $request->all();

 $subjects = SubjectCategory::select('subject_name','category_name')->where('id',$data['subject_cat_id'])
 														->get();
 	$flag = true;													
 	foreach ($subjects as $key) {
 			if($flag == true)	
 			{
 				SubjectSubCat::create([
			'subject_cat_id' => $data['subject_cat_id'],
			'subject_name'   => $key['subject_name'],
			'sub_cat_name'   => $key['category_name'],
            'category_name'  => $data['category_name'],
			'remember_token' => $data['_token'],
			
        ]);
 				$flag = false;
 			}			
 			    }
		return redirect ('admin/SubjectSubCategory')->with('success_msg', 'Subject Sub category is Added.');
	}
	
	// Delete Subject From DB
    public function deleteSubjectSubCat($subject_id = 0) {
        $subject = SubjectSubCat::find($subject_id);
		
        if ($subject->delete()) {
            return redirect('admin/SubjectSubCategory')->with("success_msg", "Row deleted successfully!");
        } else {
            return redirect('admin/SubjectSubCategory')->with("error", "Row deletion failed!");
        }
    }
	public function SubjectSubCatEdit(Request $request){
		
		$data = SubjectSubCat::where('subject_cat_id',$request->id)
						->update(['category_name'=> $request->category_id]);
						
		return redirect ('admin/SubjectSubCategory')->with('success_msg', 'Row is updated.');
	}
	
}
