<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectDetails extends Model
{
    //

    protected $fillable =[
        'subject_id','teacher_id','schedule'
    ];

    public function teacher(){
        return $this->belongsTo('App\Teacher','teacher_id');
    }

    public function subject(){
        return $this->belongsTo('App\Subject','subject_id');
    }

    public function getFullSubjectAttribute(){
        return $this->subjectCode." ".$this->subjectName;
    }

    public function students(){
        return $this->belongsToMany('App\Student','student_subject','subject_id');
    }

}
