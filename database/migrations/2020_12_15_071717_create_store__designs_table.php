<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store__designs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('store_id');
            $table->boolean('has_header');
            $table->integer('slider_image_count');
            $table->boolean('has_nav');
            $table->boolean('show_categoris');
            $table->integer('count_show_categories');
            $table->integer('categories_position');
            $table->boolean('has_banner');
            $table->integer('count_banners');
            $table->integer('banners_position');
            $table->boolean('has_brand');
            $table->integer('count_brands');
            $table->integer('brands_position');
            $table->boolean('has_recent_search_product');
            $table->integer('count_recent_search_product');
            $table->integer('recent_search_position');
            $table->boolean('has_visitores');
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
        Schema::dropIfExists('store__designs');
    }
}
