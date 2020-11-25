<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;
use App\Bunch_Details;

class Bunch extends Model
{
    public function bunch_details(){
        return $this->hasMany(Bunch_Details::class);
    }
    public function customer(){
        return $this->hasMany(Customer::class);
    }

}
