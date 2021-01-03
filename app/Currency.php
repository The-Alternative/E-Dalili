<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public function country(){
        return $this->belongsTo(country::class);
    }

    protected $fillable = ['country_id','currency_code','usd_ratio','is_active'];
}
