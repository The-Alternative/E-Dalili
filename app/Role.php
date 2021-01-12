<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;
use App\Customer;
use App\Permission;

class Role extends Model
{
    protected $fillable=['id','name'];
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
    public function customer()
    {
        return $this->hasMany(Customer::class);
    }
    public function permission()
    {
        return $this->belongsToMany(Permission::class);
    }
}
