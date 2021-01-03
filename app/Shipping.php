<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function shipment_type(){
        return $this->belongsTo(Shipment_Type::class);
    }

    public function shipment_status(){
        return $this->hasMany(Shipment_Status::class);
    }
}
