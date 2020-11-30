<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name','governorate_id','is_active','zip_code','longitude','latitude'];

    public function governorate(){
        return $this->belongsTo(Governorate::class);
    }

    public function streets(){
        return $this->hasMany(Street::class);
    }
}
