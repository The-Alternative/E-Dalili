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
        return view('brands.index')->with('brands',brand::all());
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
        return redirect(route('brands.index'));

    }

    public function show($id){
        return $this->brandModel::all()->where('id',$id);
    }

    public function edit($brand){
        return view('brands.create')->with('brand',$brand);
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
            return "success";
        }else{
            return "faild";
        }
    }
    public function destroy($id){
        $brand = brand::withTrashed()->where('id',$id)->first();
        if ($brand->trashed()){
            Storage::disk('public')->delete($brand->image);
            $brand->forceDelete();
            session()->flash('success','brand Deleted successfuly');
            return redirect(route('trashed.index'));
        }else {
            $brand->delete();
            session()->flash('success','brand Trashed successfuly');
            return redirect(route('brands.index'));
        }
    }

    public function trash(){
        $trashed = Brand::onlyTrashed()->get();
        return view('brands.index')->withBrands($trashed);
    }
}
