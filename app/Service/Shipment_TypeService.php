<?php


namespace App\Service;


use App\Shipment_Type;

class Shipment_TypeService
{
    private $shipmentTypeModel;

    public function __construct(Shipment_Type $shipment_Type){
        $this->shipmentTypeModel = $shipment_Type;
    }
    public function index(){
        return view('shipment_Types.index')->with('shipment_Types',Shipment_Type::all());
    }

    public function create()
    {
        return view('shipment_Types.create');
    }

    public function store($request){
        $request->validate([
            "type_name" => "required",
        ]);

        $response=$this->shipmentStatusModel::create([
            'type_name'    => $request->type_name,
        ]);

        session()->flash('success','shipment_Type created successfully');
        return redirect(route('shipment_Types.index'));

    }

    public function show($id){
        return $this->shipmentTypeModel::all()->where('id',$id);
    }

    public function edit($shipment_Type){
        $arr = Array(
            [
                'shipment_Types'=>$shipment_Type,
            ]
        );
        return view('shipment_Types.edit',$arr);
    }

    public function update($request,$shipment_Type){


        $response=$shipment_Type::update([
            'type_name'    => $request->type_name,
        ]);

        if($response=true){
            return "success";
        }else{
            return "faild";
        }
    }
    public function destroy($shipment_Type){
        $response = $shipment_Type::delete();

    }

}
