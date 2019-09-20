<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    //
    protected $fillable =[
        'student_id','teacher_id','subject_id','firstGrade','secondGrade','thirdGrade','fourthGrade','ave','status','subject_origin','year','request'
    ];

    public function student(){
        return $this->belongsTo('App\Student','student_id');
    }

    public function teacher(){
        return $this->belongsTo('App\Teacher','teacher_id');
    }

    public function subject(){
        return $this->belongsTo('App\Subject','subject_id');
    }

    public function subjectOrigin(){
        return $this->belongsTo('App\SubjectDetails','subject_origin');
    }

    public function department(){
        return $this->belongsTo('App\Department','department_id');
    }
}
