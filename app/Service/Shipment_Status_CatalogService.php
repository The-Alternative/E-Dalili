<?php


namespace App\Service;


use App\Shipment_Status_Catalog;

class Shipment_Status_CatalogService
{
    private $shipmentStatusCatalogModel;

    public function __construct(Shipment_Status_Catalog $shipment_Status_Catalog){
        $this->shipmentStatusCatalogModel = $shipment_Status_Catalog;
    }
    public function index(){
        return view('shipment_Status_Catalogs.index')->with('shipment_Status_Catalog',Shipment_Status_Catalog::all());
    }

    public function create(){
        return view('shipment_Status_Catalogs.create');
    }

    public function store($request){
        $request->validate([
            "status_name" => "required"
        ]);

        $response=$this->shipmentStatusCatalogModel::create([
            'status_name'     => $request->status_name
        ]);

        session()->flash('success','shipment_Status_catalog created successfully');
        return redirect(route('shipment_Status_Catalogs.index'));

    }

    public function show($id){
        return $this->shipmentStatusCatalogModel::all()->where('id',$id);
    }

    public function edit($shipment_Status_Catalog){
        $arr = Array(
            [
                'shipment_Status_Catalog'=>$shipment_Status_Catalog,
            ]
        );
        return view('shipment_Status_Catalogs.edit',$arr);
    }

    public function update($request,$shipment_Status_Catalog){


        $response=$shipment_Status_Catalog::update([
            'status_name'     => $request->status_name
        ]);

        if($response=true){
            return "success";
        }else{
            return "faild";
        }
    }
    public function destroy($shipment_Status_Catalog){
        $response = $shipment_Status_Catalog::delete();

    }

}
