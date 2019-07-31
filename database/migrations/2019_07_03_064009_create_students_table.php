<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('studentNsoNo');
            $table->string('studentLrnNo');
            $table->string('studentFirstName');
            $table->string('studentMiddleName');
            $table->string('studentLastName');
            $table->string('studentExtensionName');
            $table->date('studentDob');
            $table->string('gender_id');
            $table->integer('studentAge');
            $table->string('studentContactNo');
            $table->string('studentIndigenous');
            $table->string('studentLanguage');
            $table->string('studentReligion');
            $table->string('studentHouseNo');
            $table->string('studentBarangay');
            $table->string('studentMunicipality');
            $table->string('studentZipcode');
            $table->string('studentFatherName');
            $table->string('studentMotherName');
            $table->string('studentGuardianName');
            $table->string('studentGuardianNo');
            $table->string('photo_id');
            $table->integer('course_id');
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
        Schema::drop('students');
    }
}
