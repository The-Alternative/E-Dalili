<?php

namespace App\Http\Controllers;

use App\brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('brands.index')->with('brands',brand::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           "name" => "required|unique:brands",
           "slug" => "required:brands",
           "description" => "required:brands"
        ]);
        brand::create([
            'name'        => $request->name,
            'slug'        => $request->slug,
            'description' => $request->description,
            'image'       => $request->image->store('images','public')
        ]);

        session()->flash('success','brand created successfuly');
        return redirect(route('brands.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('brands.create')->with('brand',$brand);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
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
//        $brand->delete();

    }

    public function trashed() {
        $trashed = Brand::onlyTrashed()->get();
        return view('brands.index')->withBrands($trashed);
    }
}
