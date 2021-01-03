<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreNavDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store__nav__designs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('store_id');
            $table->boolean('has_all_categories');
            $table->boolean('has_offers');
            $table->boolean('has_jobs');
            $table->boolean('has_recent');
            $table->boolean('has_events');
            $table->boolean('has_Purchases');
            $table->boolean('is_active');

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
        Schema::dropIfExists('store__nav__designs');
    }
}
