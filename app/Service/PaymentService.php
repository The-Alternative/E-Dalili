<?php


namespace App\Service;


use App\Payment;

class PaymentService
{
    private $paymentModel;

    public function __construct(Payment $payment){
        $this->paymentModel = $payment;
    }

    public function index(){
        return view('payments.index')->with('payments',Payment::all()->where('is_active',true));
    }

    public function create(){
        return view('orders.create');
    }

    public function store($request){
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$this->paymentModel::create([
            'pay_mode'           => $request->pay_mode,
            'cheque_no'          => $request->cheque_no,
            'cheque_date'        => $request->cheque_date,
            'bank'             => $request->bank,
            'is_active'         => $is_active,
        ]);

        session()->flash('success','payment created successfuly');
        return redirect(route('payments.index'));

    }

    public function show($id){
        return $this->paymentModel::all()->where('id',$id);
    }

    public function edit($payment){
        return view('payments.create')->with('payment',$payment);
    }

    public function update($request,$payment){
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$payment::update([
            'pay_mode'           => $request->pay_mode,
            'cheque_no'          => $request->cheque_no,
            'cheque_date'        => $request->cheque_date,
            'bank'             => $request->bank,
            'is_active'         => $is_active,
        ]);

        session()->flash('success','payment updated successfully');
        return redirect(route('payments.index'));

    }

    public function destroy($payment){
        $response=$payment::update([
            'is_active'  => false
        ]);
    }

}
