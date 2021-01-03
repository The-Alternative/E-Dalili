<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function stores(){
        return $this->belongsToMany(store::class)->withTimestamps()->withPivot(['is_active','note']);
    }
}
