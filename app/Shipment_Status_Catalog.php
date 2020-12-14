<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment_Status_Catalog extends Model
{
    public function shipment_status(){
        return $this->hasMany(Shipment_Status::class);
    }
}
