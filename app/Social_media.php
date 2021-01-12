<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;

class Social_media extends Model
{
    protected $fillable=['id','name'];
    public function customer()
    {
        return $this->belongsToMany(Customer::class);
    }
}
