<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teacherFirstName');
            $table->string('teacherMiddleName');
            $table->string('teacherLastName');
            $table->string('teacherExtensionName');
            $table->integer('teacherAge');
            $table->date('teacherDob');
            $table->string('teacherContactNo');
            $table->string('teacherEmail')->unique();
            $table->string('photo_id');
            $table->integer('department_id');
            $table->integer('gender_id');
            $table->string('teacherLanguage');
            $table->string('teacherReligion');
            $table->string('teacherCourse');
            $table->string('teacherSchool');
            $table->string('teacherAchievement');
            $table->string('teacherLastSchool');
            $table->string('teacherHouseNo');
            $table->string('teacherBarangay');
            $table->string('teacherMunicipality');
            $table->string('teacherZipcode');
            $table->string('teacherFatherName');
            $table->string('teacherGuardianName');
            $table->string('teacherMotherName');
            $table->string('teacherGuardianNo');
            $table->string('username')->unique();
            $table->integer('role_id');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('teachers');
    }
}
