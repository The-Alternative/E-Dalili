<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    protected $fillable = ['name','city_id','is_active','longitude','latitude'];

    public function city(){
        return $this->belongsTo(City::class);
    }
}
