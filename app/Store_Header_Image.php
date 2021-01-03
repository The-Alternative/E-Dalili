<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store_Header_Image extends Model
{
    protected $fillable = ['store_id','image','is_active','is_cover'];

    public function store(){
        return $this->belongsTo(Store::class);
    }
}
