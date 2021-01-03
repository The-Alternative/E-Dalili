<?php


namespace App\Service;


use App\Store;
use App\Store_Header_Image;

class Store_Header_ImageService
{
    private $storeHeaderImageModel;

    public function __construct(Store_Header_Image $store_Header_Image){
        $this->storeHeaderImageModel = $store_Header_Image;
    }

    public function index(){
        return view('store_header_images.index')->with('storeHeaderImages',Store_Header_Image::all())->with('stores',Store::all()->where('is_active',true));
    }

    public function create(){
        return view('store_header_images.create')->with('stores',Store::all()->where('is_active',true));
    }

    public function store($request){
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        if ($request->is_cover){
            $is_cover=true;
        }else{
            $is_cover=false;
        }


        $response=$this->storeHeaderImageModel::create([
            'store_id'       => (int)$request->store_id,
            'image'          => $request->image->store('images','public'),
            'is_active'      => $is_active,
            'is_cover'       => $is_cover,
        ]);

        session()->flash('success','store_header_images created successfully');
        return redirect(route('store_header_images.index'));

    }

    public function show($id){
        return $this->storeHeaderImageModel::all()->where('id',$id);
    }

    public function edit($store_Header_Image){
        return view('store_header_images.create')->with('storeHeaderImage',$store_Header_Image)
            ->with('stores',Store::all()->where('is_active',true));
    }

    public function update($request,$store_Header_Image){
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        if ($request->is_cover){
            $is_cover=true;
        }else{
            $is_cover=false;
        }
        $response=$store_Header_Image::update([
            'store_id'      => (int)$request->store_id,
            'image'         => $request->image->store('images','public'),
            'is_active'     => $is_active,
            'is_cover'      => $is_cover,
        ]);

        session()->flash('success','store_header_images updated successfully');
        return redirect(route('store_header_images.index'));

    }

    public function destroy($store_Header_Image){
        $response=$store_Header_Image::update([
            'is_active' => false,
        ]);
    }

}
