<?php


namespace App\Service;


use App\country;
use App\Governorate;

class GovernorateService
{
    private $governorateModel;

    public function __construct(Governorate $governorate){
        $this->governorateModel = $governorate;
    }
    public function index(){
        return view('governorates.index')->with('governorates',Governorate::all()->where('is_active',true));
    }

    public function create(){
        return view('governorates.create')->with('countries',country::all()->where('is_active',true));
    }

    public function store($request){
        $request->validate([
            "name" => "required|unique",
            "country_id" => "required"
        ]);
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$this->governorateModel::create([
            'name'          => $request->name,
            'country_id'       => (int)$request->governorate_id,
            'is_active'     => $is_active,
            'zip_code'     => $request->zip_code,
            'call_perfix'     => $request->call_perfix,
            'longitude'     => $request->longitude,
            'latitude'      => $request->latitude
        ]);

        session()->flash('success','governorate created successfuly');
        return redirect(route('governorates.index'));

    }

    public function show($id){
        return $this->governorateModel::all()->where('id',$id);
    }

    public function edit($governorate){
        return view('governorates.edit')->with('governorate',$governorate)->with('countries',country::all()->where('is_active',true));
    }

    public function update($request,$governorate){

        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$governorate::update([
            'name'          => $request->name,
            'country_id'       => (int)$request->governorate_id,
            'is_active'     => $is_active,
            'zip_code'     => $request->zip_code,
            'call_perfix'     => $request->call_perfix,
            'longitude'     => $request->longitude,
            'latitude'      => $request->latitude
        ]);

        if($response=true){
            return "success";
        }else{
            return "faild";
        }
    }
    public function destroy($governorate){
        $response = $governorate::update([
            'is_active' => false,
        ]);
    }

}
