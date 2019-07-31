<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('nameExtension');
            $table->integer('age');
            $table->string('mobileNo');
            $table->date('dob');
            $table->integer('gender_id');
            $table->integer('houseNo');
            $table->string('barnagay');
            $table->string('municipality');
            $table->string('zipCode');
            $table->string('username')->unique();
            $table->integer('role_id');
            $table->string('photo_id');
            $table->string('email')->unique();
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
        Schema::drop('users');
    }
}
