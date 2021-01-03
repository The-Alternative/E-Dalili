<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store_Nav_Design extends Model
{
    protected $fillable = ['store_id','has_all_categories','has_offers','has_jobs','has_recent'.'has_events','has_Purchases','is_active'];

    public function store(){
        return $this->belongsTo(Store::class);
    }
}
