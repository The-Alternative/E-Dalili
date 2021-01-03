<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function products(){
        return $this->belongsToMany(product::class)->withTimestamps()->withPivot(['is_active','is_approve','price','qty']);
    }

    public function categories(){
        return $this->belongsToMany(category::class)->withTimestamps();
    }

    public function store_category_images(){
        return $this->hasMany(Store_Category_Image::class);
    }

    public function store_ratings(){
        return $this->hasMany(Store_Rating::class);
    }

    public function product_store_ratings(){
        return $this->hasMany(Product_Store_Rating::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function payments(){
        return $this->belongsToMany(Payment::class)->withTimestamps()->withPivot(['is_active','note']);
    }

    public function store_design(){
        return $this->hasOne(Store_Design::class);
    }

    public function store_nav_design(){
        return $this->hasOne(Store_Nav_Design::class);
    }

    public function store_header_images(){
        return $this->hasMany(Store_Header_Image::class);
    }



    protected $fillable = ['title','user_id','is_active','is_approved','default_lang','phone_number','bussiness_email','logo','address','location','working_hours','working_days'];
}
