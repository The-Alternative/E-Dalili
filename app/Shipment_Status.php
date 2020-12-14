<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment_Status extends Model
{
    public function shipping(){
        return $this->belongsTo(Shipping::class);
    }

    public function shipment_status_catalog(){
        return $this->belongsTo(Shipment_Status_Catalog::class);
    }
}
