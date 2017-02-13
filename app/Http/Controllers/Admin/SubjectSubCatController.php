<?php

namespace App\Http\Controllers\Admin;

use App\SubjectSubCat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubjectSubCatController extends Controller {

	public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function indexSub(){
		
		return view('admin/SubjectSubCatEntry');
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
		
			SubjectSubCat::create([
			'id' => $data['id'],
            'category_name' => $data['category_name'],
			'remember_token' => str_random(10),
			
        ]);
		
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
		
		$data = SubjectSubCat::find($request->id)
						->update(['category_name'=> $request->category_name]);
						
		return redirect ('admin/SubjectSubCategory')->with('success_msg', 'Row is updated.');
	}
	
}
