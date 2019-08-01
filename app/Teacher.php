<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //

    protected $fillable = [
        'teacherFirstName','teacherMiddleName','teacherLastName','teacherExtensionName','teacherAge','teacherDob','teacherContactNo','teacherEmail','photo_id','dept_id','gender_id','teacherLanguage',
        'teacherReligion','teacherCourse','teacherSchool','teacherAchievement','teacherLastSchool','teacherHouseNo','teacherBarangay','teacherMunicipality',
        'teacherZipcode','teacherFatherName','teacherGuardianName','teacherMotherName','teacherGuardianNo','teacherUserName','password'
    ];

    public function teacherphotos(){
        return $this->hasOne('App\Photo');
    }



}
