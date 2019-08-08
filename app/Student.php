<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    protected $fillable = [
        'studentNsoNo','studentLrnNo','studentFirstName','studentMiddleName','studentLastName','studentExtensionName',
        'studentDob','gender_id','studentAge','studentContactNo','studentIndigenous','studentLanguage','studentReligion',
        'studentHouseNo','studentBarangay','studentMunicipality','studentZipcode','studentFatherName','studentMotherName',
        'studentGuardianName','studentGuardianNo','photo_id','department_id','username','password'
        ];


    public function studentphotos(){
        return $this->hasOne('App\Photo');
    }

//    public function studentsubjects(){
//        return $this->belongsToMany('App\Subject','student_subject');
//    }

    public function studentdepartment(){
        return $this->belongsTo('App\Department','department_id');
    }

    public function studentgender(){
        return $this->belongsTo('App\Gender','gender_id');
    }

    public function getStudentFullAttribute(){
        return $this->id." ". $this->studentFirstName." ".$this->studentMiddleName." ".$this->studentLastName." ".$this->studentExtensionName;
    }
    public function subject(){
        return $this->belongsToMany('App\Subject','student_subject','student_id');
    }


}
