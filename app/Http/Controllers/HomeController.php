<?php

namespace App\Http\Controllers;

use App\category;
use App\City;
use App\Governorate;
use App\product;
use App\product_image;
use App\Street;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with('cities',City::all()->where('is_active',true))
            ->with('governorates',Governorate::all()->where('is_active',true))
            ->with('streets',Street::all()->where('is_active',true))
            ->with('categories',category::all()->where('is_active',true))
            ->with('recentProducts',product::orderBy('created_at','desc')->take(4)->get())
            ->with('recentProductImages',product_image::orderBy('created_at','desc')->where('is_cover',true)->take(4)->get())
            ;
    }

}
