<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function product_categories(){
        return $this->hasMany(product_category::class);
    }
    public function categories(){
        return $this->hasMany(category::class);
    }
    public function category(){
        return $this->belongsTo(category::class);
    }
}
