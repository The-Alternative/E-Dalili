<?php


namespace App\Service;


use App\City;
use App\Street;

class StreetService
{
    private $streetModel;

    public function __construct(Street $street){
        $this->streetModel = $street;
    }
    public function index(){
        return view('streets.index')->with('streets',Street::all()->where('is_active',true));
    }

    public function create(){
        return view('streets.create')->with('cities',City::all()->where('is_active',true));
    }

    public function store($request){
        $request->validate([
            "name" => "required|unique",
            "city_id" => "required"
        ]);
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$this->streetModel::create([
            'name'          => $request->name,
            'city_id'       => (int)$request->city_id,
            'is_active'     => $is_active,
            'longitude'     => $request->longitude,
            'latitude'      => $request->latitude
        ]);

        session()->flash('success','street created successfuly');
        return redirect(route('streets.index'));

    }

    public function show($id){
        return $this->streetModel::all()->where('id',$id);
    }

    public function edit($street){
        return view('streets.create')->with('street',$street)->with('cities',City::all()->where('is_active',true));
    }

    public function update($request,$street){

        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$street::update([
            'name'          => $request->name,
            'city_id'       => (int)$request->city_id,
            'is_active'     => $is_active,
            'longitude'     => $request->longitude,
            'latitude'      => $request->latitude
        ]);

        if($response=true){
            return "success";
        }else{
            return "faild";
        }
    }
    public function destroy($street){
       $response = $street::update([
           'is_active' => false,
       ]);
    }



}
