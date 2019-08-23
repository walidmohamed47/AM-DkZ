<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    public function Customer(){
    	return $this->belongsTo('App\User', 'customerID');
    }
    public function Employee(){
    	return $this->belongsTo('App\User', 'employeeID');
    }
}
