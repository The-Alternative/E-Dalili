<?php


namespace App\Service;


use App\Store;
use App\Store_Design;

class Store_DesignService
{
    private $storeDesignModel;

    public function __construct(Store_Design $store_Design){
        $this->storeDesignModel = $store_Design;
    }

    public function index(){
        return view('store_designs.index')->with('storeDesigns',Store_Design::all())->with('stores',Store::all()->where('is_active',true));
    }

    public function create(){
        return view('store_designs.create')->with('stores',Store::all()->where('is_active',true));
    }

    public function store($request){
        if ($request->has_header){
            $has_header=true;
        }else{
            $has_header=false;
        }
        if ($request->has_nav){
            $has_nav=true;
        }else{
            $has_nav=false;
        }
        if ($request->show_categoris){
            $show_categoris=true;
        }else{
            $show_categoris=false;
        }
        if ($request->has_banner){
            $has_banner=true;
        }else{
            $has_banner=false;
        }
        if ($request->has_brand){
            $has_brand=true;
        }else{
            $has_brand=false;
        }
        if ($request->has_recent_search_product){
            $has_recent_search_product=true;
        }else{
            $has_recent_search_product=false;
        }
        if ($request->has_visitores){
            $has_visitores=true;
        }else{
            $has_visitores=false;
        }

        $response=$this->storeDesignModel::create([
            'has_header'                      => $has_header,
            'slider_image_count'              => (int)$request->slider_image_count,
            'store_id'                        => (int)$request->store_id,
            'has_nav'                         => $has_nav,
            'show_categoris'                  => $show_categoris,
            'count_show_categories'           => (int)$request->count_show_categories,
            'categories_position'             => (int)$request->categories_position,
            'has_banner'                      => $has_banner,
            'count_banners'                   => (int)$request->count_banners,
            'banners_position'                => (int)$request->banners_position,
            'has_brand'                       => $has_brand,
            'count_brands'                    => (int)$request->count_brands,
            'brands_position'                 => (int)$request->brands_position,
            'has_recent_search_product'       => $has_recent_search_product,
            'count_recent_search_product'     => (int)$request->count_recent_search_product,
            'recent_search_position'          => (int)$request->recent_search_position,
            'has_visitores'                   => $has_visitores,
        ]);

        session()->flash('success','store_designs created successfully');
        return redirect(route('store_designs.index'));

    }

    public function show($id){
        return $this->storeDesignModel::all()->where('id',$id);
    }

    public function edit($store_Design){
        return view('store_designs.create')->with('store_design',$store_Design)
            ->with('stores',Store::all()->where('is_active',true));
    }

    public function update($request,$store_Design){
        if ($request->has_header){
            $has_header=true;
        }else{
            $has_header=false;
        }
        if ($request->has_nav){
            $has_nav=true;
        }else{
            $has_nav=false;
        }
        if ($request->show_categoris){
            $show_categoris=true;
        }else{
            $show_categoris=false;
        }
        if ($request->has_banner){
            $has_banner=true;
        }else{
            $has_banner=false;
        }
        if ($request->has_brand){
            $has_brand=true;
        }else{
            $has_brand=false;
        }
        if ($request->has_recent_search_product){
            $has_recent_search_product=true;
        }else{
            $has_recent_search_product=false;
        }
        if ($request->has_visitores){
            $has_visitores=true;
        }else{
            $has_visitores=false;
        }
        $response=$store_Design::update([
            'has_header'                      => $has_header,
            'slider_image_count'              => (int)$request->slider_image_count,
            'store_id'                        => (int)$request->store_id,
            'has_nav'                         => $has_nav,
            'show_categoris'                  => $show_categoris,
            'count_show_categories'           => (int)$request->count_show_categories,
            'categories_position'             => (int)$request->categories_position,
            'has_banner'                      => $has_banner,
            'count_banners'                   => (int)$request->count_banners,
            'banners_position'                => (int)$request->banners_position,
            'has_brand'                       => $has_brand,
            'count_brands'                    => (int)$request->count_brands,
            'brands_position'                 => (int)$request->brands_position,
            'has_recent_search_product'       => $has_recent_search_product,
            'count_recent_search_product'     => (int)$request->count_recent_search_product,
            'recent_search_position'          => (int)$request->recent_search_position,
            'has_visitores'                   => $has_visitores,
        ]);

        session()->flash('success','store_designs updated successfully');
        return redirect(route('store_designs.index'));

    }

    public function destroy($store_Design){
        $response=$store_Design::delete();
    }

}
