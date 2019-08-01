<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

    protected $uploads ='/images/';


    protected $fillable = [
        'file','user_id','teacher_id','student_id',
    ];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function getFileAttribute($photo){

        return $this->uploads .$photo;
    }
}
