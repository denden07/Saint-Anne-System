<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirstGrading extends Model
{
    //
    protected $fillable = [
        'student_id','teacher_id','subject_id','grade','status'
    ];

    public function students(){
        return $this->belongsTo('App\Student','student_id');
    }

    public function teacher(){
        return $this->belongsTo('App\Teacher','teacher_id');
    }

    public function subject(){
        return $this->belongsTo('App\Subject','subject_id');
    }
}
