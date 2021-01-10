<?php


namespace App\Service;


use App\City;
use App\Governorate;

class CityService
{
    private $cityModel;

    public function __construct(City $city){
        $this->cityModel = $city;
    }
    public function index(){

        $arr = Array(
            [
                'cities' =>City::all()->where('is_active',true),
            ]
        );
        return $arr;
    }

    public function create(){
        return view('cities.create')->with('governorates',Governorate::all()->where('is_active',true));
    }

    public function store($request){
        $request->validate([
            "name" => "required|unique",
            "governorate_id" => "required"
        ]);
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$this->cityModel::create([
            'name'          => $request->name,
            'city_id'       => (int)$request->governorate_id,
            'is_active'     => $is_active,
            'zip_code'     => $request->zip_code,
            'longitude'     => $request->longitude,
            'latitude'      => $request->latitude
        ]);

        session()->flash('success','city created successfuly');
        return redirect(route('cities.index'));

    }

    public function show($id){
        return $this->cityModel::all()->where('id',$id);
    }

    public function edit($city){
        return view('cities.edit')->with('city',$city)->with('governorates',Governorate::all()->where('is_active',true));
    }

    public function update($request,$city){

        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$city::update([
            'name'          => $request->name,
            'city_id'       => (int)$request->governorate_id,
            'is_active'     => $is_active,
            'zip_code'     => $request->zip_code,
            'longitude'     => $request->longitude,
            'latitude'      => $request->latitude
        ]);

        if($response=true){
            return "success";
        }else{
            return "faild";
        }
    }
    public function destroy($city){
        $response = $city::update([
            'is_active' => false,
        ]);
    }


}
