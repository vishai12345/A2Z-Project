<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon ;
use Illuminate\Support\Facades\Input;

class ImageController extends Controller
{
	
	protected $requests;

    public function __construct(Request $requests) {
        $this->request = $requests;
    }
    	public function upload(){
		// Redirect to image upload form
		 return view('imageupload');
   	}

	/**
	 * Store a newly uploaded resource in storage.
	 *
	 * @return Response
	 */
	public function store(){
		// Store records process
		
			$file = Input::all();
			$imagName = $file['name'];
			$imageName = $file['x'];
			
		    $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp. '-' .$imagName;
			$path = public_path().'\images\\';
			dd("img name ".$imageName ." path". $path.$name);
			dd(move_uploaded_file($imageName , $path.$name));
			die;
			//dd($file->move($path, $name));
            
		    $user = User::find('129');
		    $user->image_url = $name;
			$user->save();
		
   	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function show(){
		// Show lists of the images
		 $images = Image::all();
		 return  view('showLists',['images'=>$images]);
    }
}
?>