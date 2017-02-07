<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Subject;
use App\SubjectCategory;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	
	
	 public function create_slug($text) {
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        $text = trim($text, '-');
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = strtolower($text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }
	
	 public function searchSubject() {
        $term = Input::get('keyword');
        $results = array();
       $queries = SubjectCategory::where('category_name', 'LIKE', '%' . $term . '%')->get();
        foreach ($queries as $query) {
            $results[] = [
              'category_name' => $query->category_name,
            ];
        }
        return Response::json($results);
    }

	/* public function find(Request $request)
    {
		
        $term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        $tags = SubjectCategory::where('category_name', 'LIKE', '%' . $term . '%')->get();
		
        $formatted_tags = [];

        foreach ($tags as $tag) {
            $formatted_tags[] = ['text' => $tag->category_name];
        }

        return Response::json($formatted_tags);
    }*/
	
}
