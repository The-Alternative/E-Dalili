<?php


namespace App\Service;


use App\country;
use App\Currency;

class CurrenciesService
{
    private $currencyModel;

    public function __construct(Currency $currency){
        $this->currencyModel = $currency;
    }
    public function index(){
        return view('currencies.index')->with('currencies',Currency::all()->where('is_active',true));
    }

    public function create(){
        return view('currencies.create')->with('countries',country::all()->where('is_active',true));
    }

    public function store($request){
        $request->validate([
            "currency_code" => "required|unique",
            "country_id" => "required"
        ]);
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$this->currencyModel::create([
            'country_id'       => (int)$request->country_id,
            'is_active'     => $is_active,
            'currency_code'     => $request->currency_code,
            'usd_ratio'     => (float)$request->usd_ratio,
        ]);

        session()->flash('success','currency created successfuly');
        return redirect(route('currencies.index'));

    }

    public function show($id){
        return $this->currencyModel::all()->where('id',$id);
    }

    public function edit($currency){
        return view('currencies.edit')->with('currency',$currency)->with('countries',country::all()->where('is_active',true));
    }

    public function update($request,$currency){

        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$currency::update([
            'country_id'       => (int)$request->country_id,
            'is_active'     => $is_active,
            'currency_code'     => $request->currency_code,
            'usd_ratio'     => (float)$request->usd_ratio,
        ]);

        if($response=true){
            return "success";
        }else{
            return "faild";
        }
    }
    public function destroy($currency){
        $response = $currency::update([
            'is_active' => false,
        ]);
    }

}
