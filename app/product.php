<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
//    use SoftDeletes;
    public function customfields(){
        return $this->belongsToMany(custom_field::class)->withTimestamps()->withPivot(['value','description']);
    }
    public function categories(){
        return $this->belongsToMany(category::class)->withTimestamps()->withPivot(['description']);
    }

    public function stores(){
        return $this->belongsToMany(store::class)->withTimestamps()->withPivot(['is_active','is_approve','price','qty']);
    }

    public function product_images(){
        return $this->hasMany(product_image::class);
    }
    public function brand(){
        return $this->belongsTo(brand::class);
    }

    public function comparePrices(){
        $stores = $this->first()->stores()->get();
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
        return $min.$max;
    }
    protected $fillable = ['title','slug','brand_id','barcode','productcol','meta','is_active','is_appear','description'];
    protected $attributes = [
//        'brand_id' => 1,
//        'is_active' => true,
//        'is_appear' => false,
    ];

}
