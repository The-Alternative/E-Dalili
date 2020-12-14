<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment_Type extends Model
{
    public function shippings(){
        return $this->hasMany(Shipping::class);
    }
}
