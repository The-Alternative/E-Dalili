<?php


namespace App\Service;


use App\category;
use App\City;
use App\Governorate;
use App\product;
use App\Street;

class WelcomService
{
    public function index(){
        return view('welcome')->with('cities',City::all()->where('is_active',true))
            ->with('governorates',Governorate::all()->where('is_active',true))
            ->with('streets',Street::all()->where('is_active',true))
            ->with('categories',category::all()->where('is_active',true))
            ->with('products',product::all()->where('is_active',true));
    }

}
