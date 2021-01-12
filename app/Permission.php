<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Role;

class Permission extends Model
{
    protected $fillable=['id','name'];
    public function role()
    {
        return $this->belongsToMany(Role::class);
    }

}
