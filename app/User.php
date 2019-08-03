<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard = 'web';


    protected $fillable = [
         'email', 'password','firstName','middleName','lastName','nameExtension','age','mobileNo','dob','gender_id','houseNo','barnagay','municipality','zipCode','username','role_id','photo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function photos(){
        return $this->hasOne('App\Photo');
    }

    public function roles(){
        return $this->belongsTo('App\Role','role_id');
    }

    public function genders(){
        return $this->belongsTo('App\Gender','gender_id');
    }

}
