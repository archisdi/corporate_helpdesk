<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Bureau;
use DB;
use Auth;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name', 'username', 'gender', 'role',
    'bureau', 'position', 'est', 'img',
    'address', 'birth', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];


    public function Allticket(){
        return Ticket::all();
    }

    public function getID(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getUser(){
        return $this->username;
    }

    public function getGender(){
        return $this->gender;
    }

    public function getRole(){
        return $this->role;
    }

    public function getBureau(){
        return Bureau::find($this->bureau_id)->getName();
    }

    public function getPosition(){
        return $this->position;
    }

    public function getEst(){
        return $this->est;
    }

    public function getImg(){
        return $this->img;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getAddress(){
        return $this->address;
    }

    public function getBirth(){
        return $this->birth;
    }

    public function isOperator()
    {
        return ($this->role == 'operator');

    }
    public function isIT()
    {
        return ($this->role == 'it');
    }
    public function isEmployee()
    {
        return ($this->role == 'employee');
    }

}
