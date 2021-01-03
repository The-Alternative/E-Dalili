<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store_Design extends Model
{
    protected $fillable = ['store_id','has_header','slider_image_count','has_nav','show_categoris','count_show_categories','categories_position','has_banner','count_banners','banners_position','has_brand','count_brands','brands_position','has_recent_search_product','count_recent_search_product','recent_search_position','has_visitores'];

    public function store(){
        return $this->belongsTo(Store::class);
    }
}
