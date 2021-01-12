<?php


namespace App\Http\Controllers;


use App\category;
use App\City;
use App\Governorate;
use App\product;
use App\Service\WelcomService;
use App\Street;

class WelcomeController extends Controller
{
    private $welcomService;


    public function __construct(WelcomService  $welcom)
    {
        $this->welcomService=$welcom;

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $response = $this->welcomService->index();
        return response()->json($response,200);
    }

}
