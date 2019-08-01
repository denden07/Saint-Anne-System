<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectTeacher extends Model
{
    //

    protected $fillable = [
        'subject_id','teacher_id',

    ];

    protected $table = 'student_subject';

 public function teachers(){
     return $this->belongsToMany('App\Teacher');
 }

 public function subjects(){
     return $this->belongsToMany('App\Subject');
 }

}
