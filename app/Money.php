<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    public function Customer(){
    	return $this->belongsTo('App\User', 'customerID');
    }
    public function Admin(){
    	return $this->belongsTo('App\User', 'adminID');
    }
}
