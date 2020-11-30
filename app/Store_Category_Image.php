<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store_Category_Image extends Model
{
    public function category(){
        return $this->belongsTo(category::class);
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }

    protected $fillable = ['store_id','category_id','image','is_cover','is_active'];
}
