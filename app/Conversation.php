<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model {

    protected $table = 'conversations';
	
	protected $fillable = [
        'user_id','from_id' ,'remember_token',
    ];
}
