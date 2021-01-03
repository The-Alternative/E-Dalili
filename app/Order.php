<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function store(){
        return $this->belongsTo(Store::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function status(){
        return $this->belongsTo(Order_Status::class);
    }

    public function payment(){
        return $this->belongsTo(Payment::class);
    }

    public function order_detail(){
        return $this->hasMany(Order_Details::class);
    }
}
