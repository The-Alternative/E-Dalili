<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment_Type extends Model
{
    protected $fillable = ['type_name'];

    public function shippings(){
        return $this->hasMany(Shipping::class);
    }
}
