<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class SubjectCategory extends Model{
	
	
	 protected $table = "subject_categories";
	
	 protected $fillable = [
        'id','subject_id','subject_name','category_name','remember_token',
    ];
}
