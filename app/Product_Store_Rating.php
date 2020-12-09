<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Store_Rating extends Model
{
    public function store(){
        return $this->belongsTo(Store::class);
    }
    public function product(){
        return $this->belongsTo(product::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
