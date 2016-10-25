<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bureau extends Model
{

	protected $fillable = [
    'name',
    ];

    public function getName(){
    	return $this->name;
    }
}
