<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('amount')->default(0);
            $table->string('academic_year')->default('');
            $table->string('semster')->default('');
            $table->string('currency')->default('UGX');
            $table->string('mode_of_payment')->default('');
            $table->date('date_of_payment')->nullable();
            $table->foreignId('accountant_id')->nullable();
            $table->foreignId('course_id')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
