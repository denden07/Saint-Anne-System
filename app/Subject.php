<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //

public function teachers(){
    return $this->belongsToMany('App\Teacher','subject_teacher');
}
    public function students(){
        return $this->belongsToMany('App\Student','student_subject');
    }

    public function getFullSubjectAttribute(){
        return $this->subjectCode." ".$this->subjectName;
    }

}
