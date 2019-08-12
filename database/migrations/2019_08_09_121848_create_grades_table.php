<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->integer('teacher_id');
            $table->integer('subject_id');
            $table->integer('firstGrade');
            $table->integer('secondGrade');
            $table->integer('thirdGrade');
            $table->integer('fourthGrade');
            $table->integer('ave');
            $table->integer('subject_origin');
            $table->string('year');
            $table->integer('status');
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
        Schema::dropIfExists('grades');
    }
}
