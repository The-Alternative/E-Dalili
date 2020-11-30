<?php


namespace App\Service;


use App\category;
use App\Store;
use App\Store_Category_Image;

class Store_category_imageService
{
    private $storeCategoryImageModel;
    private $category;
    private $store;

    public function __construct(Store_Category_Image $image,category $category,Store $store)
    {

        $this->store=$store;
        $this->category=$category;
        $this->storeCategoryImageModel=$image;

    }

    public function index(){
        return view('storeCategoryImages.index')->with('storeCategoryImages',Store_Category_Image::all()->where('is_active',true))->with('categories',category::all()->where('is_active',true))->with('stores',Store::all()->where('is_active',true));
    }

    public function create(){
        return view('storeCategoryImages.create')->with('categories',category::all()->where('is_active',true))->with('storeCategoryImages',Store_Category_Image::all()->where('is_active',true))->with('stores',Store::all()->where('is_active',true));
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
        $response=$this->storeCategoryImageModel::create([
           'store_id'   => $request->store_id,
           'category_id'  => $request->category_id,
           'image'          => $request->image->store('images','public'),
           'is_active'      => $is_active,
           'is_cover'       => $is_cover
        ]);
        session()->flash('success','image created successfuly');
        return redirect(route('storeCategoryImages.index'));
    }

    public function show($id){
        return $this->storeCategoryImageModel::all()->where('id',$id);
    }

    public function edit($storeCategorImage){
        return view('storeCategoryImages.edit')->with('category',category::all()->where('is_active',true))->with('storeCategoryImage',$storeCategorImage)->with('stores',Store::all()->where('is_active',true));
    }

    public function update($request,$storeCategoryImage){
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
        if ($request->hasfile('image')){
            $response = $storeCategoryImage::update([
                'store_id'        => $request->store_id,
                'category_id'        => $request->category_id,
                'is_active'   => $is_active,
                'is_cover'   => $is_cover,
                'image'       => $request->image->store('images','public')]);
        }else{
            $response = $storeCategoryImage::update([
                'store_id'        => $request->store_id,
                'category_id'        => $request->category_id,
                'is_active'   => $is_active,
                'is_cover'   => $is_cover,
                ]);
        }
        if($response=true){
            return redirect(route('storeCategoryImages.index'));
        }else{
            return "faild";
        }
    }

    public function destroy($storeCategoryImage){
        session()->flash('success','image deleted successfuly');
        $response=$storeCategoryImage->update([
            'is_active' => false
        ]);
        return redirect(route('storeCategoryImages.index'));
    }


}
