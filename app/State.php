<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model {

    protected $table = 'state';
	
    protected $fillable = [
        'id', 'state_name','state_code','slug','remember_token',
    ];

}
