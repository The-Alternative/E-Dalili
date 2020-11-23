<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class custom_field extends Model
{
    protected $fillable = ['name','description','image','is_active'];

    public function products(){
        return $this->belongsToMany(product::class)->withTimestamps()->withPivot(['value','description']);
    }
}
