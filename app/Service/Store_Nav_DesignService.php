<?php


namespace App\Service;


use App\Store;
use App\Store_Nav_Design;

class Store_Nav_DesignService
{
    private $storeNavDesignModel;

    public function __construct(Store_Nav_Design $store_Nav_Design){
        $this->storeNavDesignModel = $store_Nav_Design;
    }

    public function index(){
        return view('store_nav_designs.index')->with('storeNavDesigns',Store_Nav_Design::all())->with('stores',Store::all()->where('is_active',true));
    }

    public function create(){
        return view('store_nav_designs.create')->with('stores',Store::all()->where('is_active',true));
    }

    public function store($request){
        if ($request->has_all_categories){
            $has_all_categories=true;
        }else{
            $has_all_categories=false;
        }
        if ($request->has_offers){
            $has_offers=true;
        }else{
            $has_offers=false;
        }
        if ($request->has_jobs){
            $has_jobs=true;
        }else{
            $has_jobs=false;
        }
        if ($request->has_recent){
            $has_recent=true;
        }else{
            $has_recent=false;
        }
        if ($request->has_events){
            $has_events=true;
        }else{
            $has_events=false;
        }
        if ($request->has_Purchases){
            $has_Purchases=true;
        }else{
            $has_Purchases=false;
        }
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }

        $response=$this->storeNavDesignModel::create([
            'has_all_categories'      => $has_all_categories,
            'has_offers'              => $has_offers,
            'store_id'                => (int)$request->store_id,
            'has_jobs'                => $has_jobs,
            'has_recent'              => $has_recent,
            'has_events'              => $has_events,
            'has_Purchases'           => $has_Purchases,
            'is_active'               => $is_active,
        ]);

        session()->flash('success','store_nav_designs created successfully');
        return redirect(route('store_nav_designs.index'));

    }

    public function show($id){
        return $this->storeNavDesignModel::all()->where('id',$id);
    }

    public function edit($store_Nav_Design){
        return view('store_nav_designs.create')->with('store_nav_design',$store_Nav_Design)
            ->with('stores',Store::all()->where('is_active',true));
    }

    public function update($request,$store_Nav_Design){
        if ($request->has_all_categories){
            $has_all_categories=true;
        }else{
            $has_all_categories=false;
        }
        if ($request->has_offers){
            $has_offers=true;
        }else{
            $has_offers=false;
        }
        if ($request->has_jobs){
            $has_jobs=true;
        }else{
            $has_jobs=false;
        }
        if ($request->has_recent){
            $has_recent=true;
        }else{
            $has_recent=false;
        }
        if ($request->has_events){
            $has_events=true;
        }else{
            $has_events=false;
        }
        if ($request->has_Purchases){
            $has_Purchases=true;
        }else{
            $has_Purchases=false;
        }
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$store_Nav_Design::update([
            'has_all_categories'      => $has_all_categories,
            'has_offers'              => $has_offers,
            'store_id'                => (int)$request->store_id,
            'has_jobs'                => $has_jobs,
            'has_recent'              => $has_recent,
            'has_events'              => $has_events,
            'has_Purchases'           => $has_Purchases,
            'is_active'               => $is_active,
        ]);

        session()->flash('success','store_nav_designs updated successfully');
        return redirect(route('store_nav_designs.index'));

    }

    public function destroy($store_Nav_Design){
        $response=$store_Nav_Design::update([
            'is_active'  => false,
        ]);
    }

}
