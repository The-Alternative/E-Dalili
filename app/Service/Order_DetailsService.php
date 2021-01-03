<?php


namespace App\Service;


use App\Order;
use App\Order_Details;
use App\product;

class Order_DetailsService
{
    private $orderDetailsModel;

    public function __construct(Order_Details $order_Details){
        $this->orderDetailsModel = $order_Details;
    }

    public function index(){
        return view('order_details.index')->with('order_details',Order_Details::all());
    }

    public function create(){
        return view('order_details.create')->with('orders',Order::all())
            ->with('Products',product::all()->where('is_active',true));
    }

    public function store($request){

        $response=$this->orderDetailsModel::create([
            'order_id'           => (int)$request->order_id,
            'product_id'          => (int)$request->product_id,
            'description'       => $request->description,
            'qty'         => $request->qty,
            'price_each'        => $request->price_each,
            'measurement'          => $request->measurement,
        ]);

        session()->flash('success','order details created successfuly');
        return redirect(route('order_details.index'));

    }

    public function show($id){
        return $this->orderDetailsModel::all()->where('id',$id);
    }

    public function edit($orderDetail){
        return view('order_details.create')->with('order_details',$orderDetail);
    }

    public function update($request,$orderDetail){
        $response=$orderDetail::update([
            'order_id'          => (int)$request->order_id,
            'product_id'        => (int)$request->product_id,
            'description'       => $request->description,
            'qty'               => $request->qty,
            'price_each'        => $request->price_each,
            'measurement'       => $request->measurement,
        ]);

        session()->flash('success','order details updated successfully');
        return redirect(route('order_details.index'));

    }

    public function destroy($orderDetail){
        $response=$orderDetail::delete();
    }

}
