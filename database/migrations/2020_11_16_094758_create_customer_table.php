<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('l_name');
            $table->integer('age');
            $table->string('adress');
            $table->string('image');
            $table->string('location');
            $table->string('email');
            $table->string('bunch');
            $table->string('bunch_date');
            $table->integer('E-dalely_point');
            $table->integer('precentage');
            $table->integer('role_id')->unsigned();
            $table->integer('customer_type_id')->unsigned();
            $table->integer('social_media_id')->unsigned();
            $table->integer('bunch_id')->unsigned();
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
        Schema::dropIfExists('customer');
    }
}
