<?php


namespace App\Service;
use App\product;
use App\Store;
use App\User;
use Illuminate\Http\Request;


class StoreService
{
    private $product;
    private $storeModel;

    public function __construct(product $product,Store $store)
    {

        $this->storeModel=$store;
        $this->product=$product;

    }

    public function createStore(Request $request) {
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $request['default_lang']=(int)$request['default_lang'];
        $request['user']=(int)$request['user'];
        $response = $this->storeModel::create([
            'title'              => $request->title,
            'is_active'          => $is_active,
            'is_approved'        => false,
            'default_lang'       => $request->default_lang,
            'phone_number'       => $request->phone_number,
            'bussiness_email'    => $request->bussiness_email,
            'logo'               => $request->logo,
            'address'            => $request->address,
            'location'           => $request->location,
            'working_hours'      => $request->working_hours,
            'working_days'       => $request->working_days,
            'user_id'            => $request->user

        ]);
        return $response;
    }

    public function addProductsToStore(Request $request,Store $store){

        for ($i=0;$i<(int)$request->counter;$i++){
            $store->products()->attach($request->product[$i],[
                'is_active' => (int)$request->is_active,
                'price'     => (float)$request->price,
                'qty'       => (int)$request->qty,
            ]);
        }
    }



    public function deleteStore(Store $store){
        $response = $store->update([
            'is_approved' => false,
            'is_activve'  => false
        ]);

    }

    public function update (Request $request,Store $store){

        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response = $store->update([
            'title'              => $request->title,
            'is_active'          => $is_active,
            'is_approved'        => false, //when user update his store he needs to approve this updates by admin
            'default_lang'       => $request->default_lang,
            'phone_number'       => $request->phone_number,
            'bussiness_email'    => $request->bussiness_email,
            'logo'               => $request->logo,
            'address'            => $request->address,
            'location'           => $request->location,
            'working_hours'      => $request->working_hours,
            'working_days'       => $request->working_days,
            'user_id'            => $request->user
        ]);
        if($response=true){
            return "success";
        }else{
            return "faild";
        }
    }

    public function updateProducts (Request $request,Store $store){
        $links=[];
        for($i=0;$i<$request->counter;$i++){
            $links[$request->product[$i]] = ['is_active'=>(int)$request->product_active[$i],'is_approve'=>(int)$request->product_approve[$i],'price'=>(float)$request->price[$i],'qty'=>(int)$request->qty[$i]];
        }
        $store->products()->sync($links);
    }

    public function stores(){
        return $this->storeModel::all();
    }

    public function approvedStores(){
        return $this->storeModel::all()->where('is_approved',1);
    }
    public function activeStores(){
        return $this->storeModel::all()->where('is_active',1);
    }

    public function storeDetailes($id){
        return $this->storeModel::all()->when('id',$id);
    }
//    public function deleteProductsfromStore(Request $request,Store $store){
//
//        for ($i=0;$i<(int)$request->counter;$i++){
//            $store->products()->deattach($request->product[$i]);
//        }
//    }

}
