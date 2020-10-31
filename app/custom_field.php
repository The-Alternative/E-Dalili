<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class custom_field extends Model
{
    public function product_customfields(){
        return $this->hasMany(product_customfield::class);
    }
}
