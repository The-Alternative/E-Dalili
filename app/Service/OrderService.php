<?php


namespace App\Service;


use App\Order;
use App\Order_Status;
use App\Payment;
use App\Store;
use App\User;

class OrderService
{
    private $orderModel;

    public function __construct(Order $order){
        $this->orderModel = $order;
    }

    public function index(){
        return view('orders.index')->with('orders',Order::all());
    }

    public function create(){
        return view('orders.create')->with('users',User::all())
            ->with('stores',Store::all()->where('is_active',true))
            ->with('payments',Payment::all()->where('is_active',true))
            ->with('status',Order_Status::all()->where('is_active',true));
    }

    public function store($request){
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$this->orderModel::create([
            'user_id'           => (int)$request->user_id,
            'store_id'          => (int)$request->store_id,
            'payment_id'        => (int)$request->payment_id,
            'total'             => (float)$request->total,
            'description'       => $request->description,
            'is_active'         => $is_active,
            'invoice_no'        => $request->invoice_no,
            'pay_date'          => $request->pay_date,
            'order_status_id'   => (int)$request->order_status_id
        ]);

        session()->flash('success','order created successfuly');
        return redirect(route('orders.index'));

    }

    public function show($id){
        return $this->orderModel::all()->where('id',$id);
    }

    public function edit($order){
        return view('orders.create')->with('order',$order);
    }

    public function update($request,$order){
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$order::update([
            'user_id'           => (int)$request->user_id,
            'store_id'          => (int)$request->store_id,
            'payment_id'        => (int)$request->payment_id,
            'total'             => (float)$request->total,
            'description'       => $request->description,
            'is_active'         => $is_active,
            'invoice_no'        => $request->invoice_no,
            'pay_date'          => $request->pay_date,
            'order_status_id'   => (int)$request->order_status_id
        ]);

        session()->flash('success','order updated successfully');
        return redirect(route('orders.index'));

    }

    public function destroy($order){
        $response=$order::update([
           'is_active'  => false
        ]);
    }

}
