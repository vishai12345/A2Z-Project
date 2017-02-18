<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class SubjectSubCat extends Model{
	
	
	 protected $table = "subjectsub_cat";
	
	 protected $fillable = [
        'id','subject_cat_id','subject_name','sub_cat_name', 'category_name','remember_token',
    ];
}
