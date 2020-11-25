<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Role;
use App\Http\Middleware\general_admin;

class Employee extends Model
{
    protected $fillable=[
        'role_id','first_name','l_name','age','sex','image','job_title','certificate','start_date','upgrade','salary'
    ];
    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function generalAdmin(){
        return $this->role_id=='1';
    }
}
