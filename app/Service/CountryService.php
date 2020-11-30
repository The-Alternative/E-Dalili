<?php


namespace App\Service;


use App\country;

class CountryService
{
    private $countryModel;

    public function __construct(country $country){
        $this->countryModel = $country;
    }
    public function index(){
        return view('countries.index')->with('countries',country::all()->where('is_active',true));
    }

    public function create(){
        return view('countries.create');
    }

    public function store($request){
        $request->validate([
            "name" => "required|unique",
            "currency" => "required"
        ]);
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$this->governorateModel::create([
            'name'          => $request->name,
            'is_active'     => $is_active,
            'zip_code'     => $request->zip_code,
            'iso_code'     => $request->iso_code,
            'currency'     => $request->currency,
            'call_perfix'     => $request->call_perfix,
            'longitude'     => $request->longitude,
            'latitude'      => $request->latitude
        ]);

        session()->flash('success','country created successfuly');
        return redirect(route('countries.index'));

    }

    public function show($id){
        return $this->countryModel::all()->where('id',$id);
    }

    public function edit($country){
        return view('countries.edit')->with('country',$country);
    }

    public function update($request,$country){

        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$country::update([
            'name'          => $request->name,
            'is_active'     => $is_active,
            'zip_code'     => $request->zip_code,
            'iso_code'     => $request->iso_code,
            'currency'     => $request->currency,
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
    public function destroy($country){
        $response = $country::update([
            'is_active' => false,
        ]);
    }

}
