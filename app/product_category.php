<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_category extends Model
{
    public function product(){
        return $this->belongsTo(product::class);
    }
    public function category(){
        return $this->belongsTo(category::class);
    }
    protected $fillable = ['product_id','category_id','description'];
}
