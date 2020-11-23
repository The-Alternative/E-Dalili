<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['name','slug','parent_id','image','is_active'];

    public function products(){
        return $this->belongsToMany(product::class)->withTimestamps()->withPivot(['description']);
    }

    public function stores(){
        return $this->belongsToMany(Store::class)->withTimestamps();
    }

    public function categories(){
        return $this->hasMany(category::class);
    }
    public function category(){
        return $this->belongsTo(category::class);
    }
}
