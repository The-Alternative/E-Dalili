<?php


namespace App\Service;


use App\brand;
use App\category;
use App\City;
use App\custom_field;
use App\Governorate;
use App\Http\Requests\ProductRequest;
use App\product;
use App\product_image;
use App\Store;
use App\Street;
use App\Service\StoreService;


class WelcomService
{
    public function index(){
        return view('index')->with('cities',City::all()->where('is_active',true))
            ->with('governorates',Governorate::all()->where('is_active',true))
            ->with('streets',Street::all()->where('is_active',true))
            ->with('categories',category::all()->where('is_active',true))
            ->with('customs',custom_field::all()->where('is_active',true))
            ->with('recentProducts',product::orderBy('created_at','desc')->take(4)->get())
            ->with('recentProductImages',product_image::orderBy('created_at','desc')->where('is_cover',true)->take(4)->get())
            ->with('lastStores',Store::all()->where('is_active',true)->where('is_approved',true)->take(9))
            ->with('brands',brand::orderBy('created_at','desc')->take(5)->get())
            ->with('Products',product::all())
            ->with('stores',Store::all()->where('is_active',true)->where('is_approved',true))
            ;
    }
//     return product::with(['categories' => function ($query) {
//            $query->orderBy('created_at', 'desc');
//        }])->where('is_active',true)->get();

}
