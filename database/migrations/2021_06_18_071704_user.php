<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username'); 
            $table->string('display_name');
            $table->string('email');
            $table->string('password');
            $table->string('profile_picture_id')->nullable();
            $table->string('DOB')->nullable();
            $table->string('gender')->nullable();
            $table->string('parent_email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->boolean('active')->nullable();
            $table->integer('signin_count')->nullable();
            $table->boolean('admin')->nullable();
            $table->integer('secret_picture_id')->nullable();
            $table->string('secret_words')->nullable();
            $table->string('primary_contact_info_id')->nullable();
            $table->boolean('teacher')->nullable();
            $table->string('country')->nullable();
            $table->string('school_type')->nullable();
            $table->string('school_name')->nullable();
            $table->timestamp('last_logged_in')->nullable();
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
