<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Social_media;
use App\Role;
use App\Bunch;
use App\Customer_Type;

class Customer extends Model
{
    public function social_media(){
        return $this->belongsToMany(Social_media::class);
    }
    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function bunch(){
        return $this->belongsTo(Bunch::class);
    }
    public function customer_type(){
        return $this->belongsTo(Customer_Type::class);
    }
}
