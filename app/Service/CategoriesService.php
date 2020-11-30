<?php


namespace App\Service;


use App\category;

class CategoriesService
{
    private $categoryModel;

    public function __construct(category $category){
        $this->categoryModel = $category;
    }

    public function index(){
        return view('categories.index')->with('categories',category::all()->where('is_active',true));
    }

    public function create(){
        return view('categories.create')->with('categories',category::all()->where('is_active',true));
    }

    public function store($request){
        $request->validate([
            "name" => "required|unique:brands",
            "slug" => "required:brands",
        ]);
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        $response=$this->categoryModel::create([
            'name'          => $request->name,
            'slug'          => $request->slug,
            'is_active'     => $is_active,
            'parent_id'     => (int)$request->parent,
            'image'         => $request->image->store('images','public')
        ]);
        session()->flash('success','category created successfuly');
        return redirect(route('categories.index'));

    }

    public function show($id){
        return $this->categoryModel::all()->where('id',$id);
    }

    public function edit($category){
        return view('categories.edit')->with('category',$category)->with('categories',category::all());
    }

    public function update($request,$category){
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        if ($request->hasfile('image')){
            $response = $category::update([
                'name'        => $request->name,
                'slug'        => $request->slug,
                'is_active'   => $is_active,
                'parent_id'   => (int)$request->parent,
                'image'       => $request->image->store('images','public')]);
        }else{
            $response = $category::update([
                'name'        => $request->name,
                'slug'        => $request->slug,
                'is_active'   => $is_active,
                'parent_id'   => (int)$request->parent]);
        }
        if($response=true){
            return redirect(route('categories.index'));
        }else{
            return "faild";
        }
    }

    public function destroy($category){
        session()->flash('success','category deleted successfuly');
        $response=$category->update([
            'is_active' => false
        ]);
        return redirect(route('categories.index'));

    }

}
