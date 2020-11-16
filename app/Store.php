<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function products(){
        return $this->belongsToMany(product::class)->withTimestamps()->withPivot(['is_active','is_approve','price','qty']);
    }
    protected $fillable = ['title','user_id','is_active','is_approved','default_lang','phone_number','bussiness_email','logo','address','location','working_hours','working_days'];
}
