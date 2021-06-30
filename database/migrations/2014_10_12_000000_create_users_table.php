<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_1');
            $table->string('phone_2');
            $table->enum('gender', ['Male', 'Female']);
            $table->date('date_of_birth');
            $table->string('religion');
            $table->string('marital_status');
            $table->string('spouse_name');
            $table->string('spouse_contact');
            $table->enum('disability', ['Yes', 'No']);
            $table->string('nature_of_disability');
            $table->string('role');
            $table->string('father_name');
            $table->string('father_contact');
            $table->string('mother_name');
            $table->string('mother_contact');
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
