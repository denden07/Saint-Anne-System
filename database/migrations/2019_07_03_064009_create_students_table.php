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
            $table->string('studentFirstName');
            $table->string('studentMiddleName');
            $table->string('studentLastName');
            $table->string('studentExtensionName');
            $table->date('studentDob');
            $table->string('sex_id');
            $table->integer('studentAge');
            $table->string('studentIndigenous');
            $table->string('studentLanguage');
            $table->string('religion_id');
            $table->string('studentHouseNumber');
            $table->string('studentBarangay');
            $table->string('studentMunicipality');
            $table->string('studentZipcode');
            $table->string('studentFatherName');
            $table->string('studentMothersName');
            $table->string('studentGuardianName');
            $table->integer('studentGuardianName');
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
