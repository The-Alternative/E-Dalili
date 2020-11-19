<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['image','table_id','item_id'];

    public function table(){
        return $this->belongsTo(tables::class);
    }
}
