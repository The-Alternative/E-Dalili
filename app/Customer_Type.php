<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;

class Customer_Type extends Model
{
    public function customer()
    {
        return $this->hasMany(Customer::class);
    }
}
