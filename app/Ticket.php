<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    protected $fillable = [
        'employee_id',
        'admin_id',
        'it_id',
        'problem_id',
        'status_id',
        'bureau_id',
        'description',
        'location',
        'temp',
        'closed_at'

    ];

    public function problem(){
        return $this->belongsTo('App\Problem', 'problem_id');
    }

}
