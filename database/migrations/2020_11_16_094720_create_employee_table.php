<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('role_id');
            $table->string('first_name');
            $table->string('l_name');
            $table->integer('age');
            $table->string('sex');
            $table->string('image');
            $table->string('job_title');
            $table->string('certificate');
            $table->string('start_date');
            $table->string('upgrade');
            $table->integer('salary');
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
        Schema::dropIfExists('employee');
    }
}
