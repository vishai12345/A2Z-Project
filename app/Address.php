<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

    protected $table = 'addresses';
	
	protected $fillable = [
        'id', 'user_id','street','city','country','postcode','remember_token',
    ];
}