<?php


namespace App\Service;


use App\Order_Status;

class Order_StatusService
{
    private $orderStatusModel;

    public function __construct(Order_Status $order_Status){
        $this->orderStatusModel = $order_Status;
    }

    public function index(){
        return view('order_statuses.index')->with('status',Order_Status::all()->where('is_active',true));
    }

    public function create(){
        return view('order_statuses.create');
    }

    public function store($request){
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$this->orderModel::create([
            'status'           => $request->status,
            'description'       => $request->description,
            'is_active'         => $is_active,
        ]);

        session()->flash('success','status created successfully');
        return redirect(route('order_statuses.index'));

    }

    public function show($id){
        return $this->orderStatusModel::all()->where('id',$id);
    }

    public function edit($status){
        return view('order_statuses.create')->with('status',$status);
    }

    public function update($request,$status){
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$status::update([
            'status'           => $request->status,
            'description'       => $request->description,
            'is_active'         => $is_active,
        ]);

        session()->flash('success','status created successfully');
        return redirect(route('order_statuses.index'));

    }

    public function destroy($status){
        $response=$status::update([
            'is_active'  => false
        ]);
    }

}
