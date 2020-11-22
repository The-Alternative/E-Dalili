<?php


namespace App\Service;


use App\custom_field;

class Custom_FieldsService
{
    private $customModel;

    public function __construct(custom_field $custom_field){
        $this->customModel = $custom_field;
    }

    public function index(){
        return view('custom_fields.index')->with('custom_fields',custom_field::all()->where('is_active',true));
    }

    public function create(){
        return view('custom_fields.create');
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
        $response=$this->customModel::create([
            'name'          => $request->name,
            'description'   => $request->description,
            'is_active'     => $is_active,
            'image'         => $request->image->store('images','public')
        ]);
        session()->flash('success','custom_field created successfuly');
        return redirect(route('custom_fields.index'));

    }

    public function show($id){
        return $this->customModel::all()->where('id',$id);
    }

    public function edit($custom_field){
        return view('custom_fields.create')->with('custom_field',$custom_field);
    }

    public function update($request,$custom_field){
        if ($request->is_active){
            $is_active=true;
        }else{
            $is_active=false;
        }
        if ($request->hasfile('image')){
            $response = $custom_field::update([
                'name'        => $request->name,
                'description'        => $request->description,
                'is_active'   => $is_active,
                'image'       => $request->image->store('images','public')]);
        }else{
            $response = $custom_field::update([
                'name'        => $request->name,
                'description'        => $request->description,
                'is_active'   => $is_active]);
        }
        if($response=true){
            return redirect(route('custom_fields.index'));
        }else{
            return "faild";
        }
    }

    public function destroy($custom_field){
        session()->flash('success','custom_field deleted successfuly');
        $response=$custom_field->update([
            'is_active' => false
        ]);
        return redirect(route('custom_fields.index'));

    }

}
