<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('store_id');
            $table->integer('product_id');
            $table->string('description');
            $table->boolean('is_active');
            $table->integer('price');
            $table->integer('new_price');
            $table->date('start_date');
            $table->date('end_date');
            $table->time('time');
            $table->boolean('Post_Type');
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
        Schema::dropIfExists('posts');
    }
}
