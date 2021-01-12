<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bunch;

class Bunch_Details extends Model
{
    public function bunch(){
        return $this->belongsTo(Bunch::class);
    }
}
