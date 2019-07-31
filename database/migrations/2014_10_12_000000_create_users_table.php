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
            $table->string('firstName');
            $table->string('lastName');
            $table->string('nameExtension');
            $table->integer('age');
            $table->string('mobile');
            $table->date('dob');
            $table->integer('role_id');
            $table->integer('gender');
            $table->integer('house_no');
            $table->string('barnagay');
            $table->string('municipal');
            $table->string('zipCode');
            $table->string('username')->unique();
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
