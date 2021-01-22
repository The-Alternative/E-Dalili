<?php


namespace App\Service;


use App\brand;
use http\Env\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\This;

class BrandService
{
    private $brandModel;

    public function __construct(brand $brand){
        $this->brandModel = $brand;
    }

    public function index(){
        return brand::all();
    }

    public function create(){
        return view('brands.create');
    }

    public function store($request){
        $request->validate([
            "name" => "required|unique:brands",
            "slug" => "required:brands",
            "description" => "required:brands"
        ]);
        $response=$this->brandModel::create([
            'name'        => $request->name,
            'slug'        => $request->slug,
            'description' => $request->description,
            'image'       => $request->image->store('images','public')
        ]);

        session()->flash('success','brand created successfuly');
        return $response;

    }

    public function show($id){
         $response = $this->brandModel::all()->where('id',$id);
         return $response;
    }

    public function edit($brand){
        $arr = Array(
            [
                $brand,
            ]
        );
        return $arr;
    }

    public function update($request,$brand){
        if ($request->hasfile('image')){
            $response = $brand::update([
                'name'        => $request->name,
                'slug'        => $request->slug,
                'description' => $request->description,
                'image'       => $request->image->store('images','public')]);
        }else{
            $response = $brand::update([
                'name'        => $request->name,
                'slug'        => $request->slug,
                'description' => $request->description]);
        }
        if($response=true){
            return true;
        }else{
            return false;
        }
    }
    public function destroy($id){
        $brand = brand::withTrashed()->where('id',$id)->first();
        if ($brand->trashed()){
            Storage::disk('public')->delete($brand->image);
            $brand->forceDelete();
            session()->flash('success','brand Deleted successfuly');
            return true;
        }else {
            $brand->delete();
            session()->flash('success','brand Trashed successfuly');
            return false;
        }
    }

    public function trash(){
        $trashed = Brand::onlyTrashed()->get();
        return $trashed;
    }
}
