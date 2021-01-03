<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment_Status_Catalog extends Model
{
    protected $fillable = ['status_name'];

    public function shipment_status(){
        return $this->hasMany(Shipment_Status::class);
    }
}
