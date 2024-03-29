<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('subject_teacher', function (Blueprint $table) {
                    $table->increments('id');
                    $table->unsignedInteger('subject_id');
                    $table->unsignedInteger('teacher_id');
                    $table->timestamps();


                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
