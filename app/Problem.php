<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    public function getName(){
    	return $this->name;
    }

    public function ticket(){
    	return $this->hasMany('App\Ticket');
    }
}
