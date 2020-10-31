<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class brand extends Model
{
    use SoftDeletes;
    public function products(){
        return $this->hasMany(product::class);
    }
    protected $fillable = ['name','slug','description','image'];
}
