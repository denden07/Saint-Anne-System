<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    public function students(){
        return $this->hasMany('App\Student','department_id');
    }

    public function getFullDepartmentAttribute(){
        return $this->deptName;
    }


}
