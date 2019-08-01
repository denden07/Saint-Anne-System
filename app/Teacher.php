<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //

    protected $fillable = [
        'teacherFirstName','teacherMiddleName','teacherLastName','teacherExtensionName','teacherAge','teacherDob','teacherContactNo','teacherEmail','photo_id','department_id','gender_id','teacherLanguage',
        'teacherReligion','teacherCourse','teacherSchool','teacherAchievement','teacherLastSchool','teacherHouseNo','teacherBarangay','teacherMunicipality',
        'teacherZipcode','teacherFatherName','teacherGuardianName','teacherMotherName','teacherGuardianNo','teacherUserName','password','role_id'
    ];

    public function teacherphotos(){
        return $this->hasOne('App\Photo');
    }

    public function genders(){
        return $this->belongsTo('App\Gender','gender_id');
    }
    public function roles(){
        return $this->belongsTo('App\Role');
    }

    public function departments(){
        return $this->belongsTo('App\Department','department_id');
    }


}
