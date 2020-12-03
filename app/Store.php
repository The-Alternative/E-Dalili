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

    public function comparePrices(product $product){
        $stores = $product->where('id',$product->id)->first()->stores()->get();
        foreach ($stores as $store){
            $x[]=$store->pivot->price;
        }
        $y=999999999999999999999999999999999999;
        $e=0;
        foreach ($x as $t){
            if ($t<$y){
                $y=$t;
            }
            if ($t>$e){
                $e=$t;
            }
        }

        $min = $y;
        $max = $e;
        return 'min='.$min.'and max='.$max;
    }



    protected $fillable = ['title','user_id','is_active','is_approved','default_lang','phone_number','bussiness_email','logo','address','location','working_hours','working_days'];
}
