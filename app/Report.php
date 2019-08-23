<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public $table = "reports";
   

    public function Transfer(){
    	return $this->belongsTo('App\Transfer');
    }
}
