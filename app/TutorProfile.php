<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class TutorProfile extends Model
{
	
	 protected $table = "tutor_profile";
	
	 protected $fillable = [
         'id','bio','video','profile_picture','tagline','remember_token',
    ];
	
}