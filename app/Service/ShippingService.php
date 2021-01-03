<?php


namespace App\Service;


use App\Shipment_Type;
use App\Shipping;
use App\User;

class ShippingService
{
    private $shippingModel;

    public function __construct(Shipping $shipping){
        $this->shippingModel = $shipping;
    }
    public function index(){
        return view('shippings.index')->with('shippings',Shipping::all());
    }

    public function create(){
        return view('shippings.create')->with('users',User::all())->with('shipment_types',Shipment_Type::all());
    }

    public function store($request){
        $request->validate([
            "shipping_address" => "required",
            "delivery_cost" => "required"
        ]);

        $response=$this->shippingModel::create([
            'user_id'               => (int)$request->user_id,
            'shipment_type_id'      => (int)$request->shipment_type_id,
            'shipping_address'      => $request->shipping_address,
            'products_price'        => (float)$request->products_price,
            'delivery_cost'         => (float)$request->delivery_cost,
            'discount'              => (float)$request->discount,
            'final_price'           => (float)$request->final_price,
        ]);

        session()->flash('success','shipping created successfully');
        return redirect(route('shippings.index'));

    }

    public function show($id){
        return $this->shippingModel::all()->where('id',$id);
    }

    public function edit($shipping){
        return view('shippings.edit')->with('shipping',$shipping)->with('users',User::all())->with('shipment_types',Shipment_Type::all());
    }

    public function update($request,$shipping){


        $response=$shipping::update([
            'user_id'               => (int)$request->user_id,
            'shipment_type_id'      => (int)$request->shipment_type_id,
            'shipping_address'      => $request->shipping_address,
            'products_price'        => (float)$request->products_price,
            'delivery_cost'         => (float)$request->delivery_cost,
            'discount'              => (float)$request->discount,
            'final_price'           => (float)$request->final_price,
        ]);

        if($response=true){
            return "success";
        }else{
            return "faild";
        }
    }
    public function destroy($shipping){
        $response = $shipping::delete();

    }

}
