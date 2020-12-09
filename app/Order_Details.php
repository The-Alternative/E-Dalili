<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Details extends Model
{
    public function product(){
        return $this->belongsTo(product::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
