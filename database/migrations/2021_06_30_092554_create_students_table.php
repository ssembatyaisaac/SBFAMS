<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->enum('intake', ['January', 'May', 'September']);
            $table->string('profileImage')->default('');
            $table->foreignId('user_id');
            $table->foreignId('course_id');
            $table->string('optional_course')->default('');
            $table->enum('delivery',['Weekend', 'Distance Learning']);
            $table->string('sponsorship')->default('');
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
        Schema::dropIfExists('students');
    }
}
