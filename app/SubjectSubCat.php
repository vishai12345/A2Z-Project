<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class SubjectSubCat extends Model{
	
	
	 protected $table = "subjectsub_cat";
	
	 protected $fillable = [
        'id', 'category_name','remember_token',
    ];
}
