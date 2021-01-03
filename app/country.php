<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $fillable = ['name','iso_code','currency','is_active','call_perfix','zip_code','longitude','latitude'];

    public function governorates(){
        return $this->hasMany(Governorate::class);
    }

    public function currencies(){
        return $this->hasMany(Currency::class);
    }
}
