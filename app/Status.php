<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function getName(){
    	return $this->name;
    }

    public function getColor(){
    	return $this->color;
    }
}
