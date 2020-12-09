<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store_Rating extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function store(){
        return $this->belongsTo(Store::class);
    }
}
