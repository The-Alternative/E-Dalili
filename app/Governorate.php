<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    protected $fillable = ['name','country_id','is_active','call_perfix','zip_code','longitude','latitude'];

    public function country(){
        return $this->belongsTo(country::class);
    }

    public function cities(){
        return$this->hasMany(City::class);
    }
}
