<?php

namespace App\Http\Controllers;

use App\brand;
use App\category;
use App\custom_field;
use App\product;


use App\product_category;
use App\product_customfield;
use App\Service\ProductService;
use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Response;

class ProductsController extends Controller
{
private $productService;
private $response;

     /* ProductsController constructor.
     */
    public function __construct(ProductService $productService,Response  $response)
    {
        $this->productService=$productService;
        $this->response=$response;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store(Request $request)
    {

       $request['brand_id']=(int)$request['brand_id'];

//        $request->validate([
//            "title" => "required:products",
//            "slug" => "required:products",
//            "barcode" => "required:products",
//            "productcol" => "required:products",
//            "meta" => "required:products",
//            "description" => "required:products",
//        ]);
       $this->response= $this->productService->store($request);
        return  $this->response;
    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response= $this->productService->Products();
        return $response;
    }
    /**
     * Display the specified resource.
     *
     *
     */
    public function get_all()
{

        $response= $this->productService->Products();
        dump($response);
        die();
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.create')->with('product',$product)->with('brands',brand::all())->with('custom_fields',custom_field::all())->with('pcustoms',product_customfield::all()->where('product_id',$product->id))->with('categories',category::all())->with('pcategories',product_category::all()->where('product_id',$product->id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request['brand_id']=(int)$request['brand_id'];
        $product->brand_id=(int)$request['brand_id'];
        $this->response= $this->productService->update($request,$product);
        return  $this->response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->response= $this->productService->delete($product);
        session()->flash('success','product deleted successfuly');
        return redirect(route('products.index'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index')->with('products',product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create')->with('brands',brand::all())->with('custom_fields',custom_field::all())->with('categories',category::all());
    }

}
