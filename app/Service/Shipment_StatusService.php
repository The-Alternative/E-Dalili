<?php


namespace App\Service;


use App\Shipment_Status;
use App\Shipment_Status_Catalog;
use App\Shipping;

class Shipment_StatusService
{
    private $shipmentStatusModel;

    public function __construct(Shipment_Status $shipment_Status){
        $this->shipmentStatusModel = $shipment_Status;
    }
    public function index(){
        return view('shipment_Statuses.index')->with('shipment_Statuses',Shipment_Status::all());
    }

    public function create(){
        return view('shipment_Statuses.create')->with('shippings',Shipping::all())->with('shipment_status_catalog',Shipment_Status_Catalog::all());
    }

    public function store($request){
        $request->validate([
            "shipping_id" => "required",
            "shipment_status_catalog_id" => "required",
            "status_time" => "required",
        ]);

        $response=$this->shipmentStatusModel::create([
            'shipping_id'                        => (int)$request->shipping_id,
            'shipment_status_catalog_id'         => (int)$request->shipment_status_catalog_id,
            'status_time'                        => $request->status_time,
            'note'                               => $request->note,
        ]);

        session()->flash('success','shipment_Status created successfully');
        return redirect(route('shipment_Statuses.index'));

    }

    public function show($id){
        return $this->shipmentStatusModel::all()->where('id',$id);
    }

    public function edit($shipment_Status){
        $arr = Array(
            [
                'shipment_Status'=>$shipment_Status,
                'shippings' => Shipping::all(),
                'shipment_status_catalog' => Shipment_Status_Catalog::all()
            ]
        );
        return view('shipment_Statuses.edit',$arr);
    }

    public function update($request,$shipment_Status){


        $response=$shipment_Status::update([
            'shipping_id'                        => (int)$request->shipping_id,
            'shipment_status_catalog_id'         => (int)$request->shipment_status_catalog_id,
            'status_time'                        => $request->status_time,
            'note'                               => $request->note,
        ]);

        if($response=true){
            return "success";
        }else{
            return "faild";
        }
    }
    public function destroy($shipment_Status){
        $response = $shipment_Status::delete();

    }

}
