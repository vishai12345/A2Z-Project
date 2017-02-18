<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    protected $table = 'messages';
	
	protected $fillable = [
        'from_id','from_name' ,'user_id','regarding_sub','postal_code','message_body','remember_token',
    ];
}
