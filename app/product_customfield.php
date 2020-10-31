<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_customfield extends Model
{
    public function product(){
        return $this->belongsTo(product::class);
    }
    public function custom_field(){
        return $this->belongsTo(custom_field::class);
    }
    protected $fillable = ['product_id','custom_field_id','value','description'];
//    protected $attributes = [
//        'description' => 'huhiughd',
//    ];
}
