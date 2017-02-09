<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon ;
use Illuminate\Support\Facades\Input;
use Response;
use Illuminate\Support\Facades\Auth;
use App\TutorProfile;

class ImageController extends Controller
{
	
	protected $requests;

    public function __construct(Request $requests) {
        $this->request = $requests;
    }
	
	/**
	 * Store a newly uploaded resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request){
		// Store records process

			$destinationPath = public_path().'\images\\';
			$file = $request->file('file');
			$fileName = $file->getClientOriginalName();
			$timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $fileName = $timestamp. '-' .$fileName;
			if($file->isValid())
			{
			 $imagePat = $file->move($destinationPath, $fileName);
			 $imagePath ='public\images\\'.$fileName;
			$id = Auth::id();
			$img = User::find($id);
			$img->image_url = $fileName;
			$img->save();
		    $user = TutorProfile::where('user_id',$id)->get();
			foreach($user as $users)
			{
				$users->profile_picture = $fileName;
				$users->save();
			}
			 
			}
			
			
		    
			return Response::json($imagePath);
		
   	}

}
?>