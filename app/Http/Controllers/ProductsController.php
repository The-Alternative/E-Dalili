<?php

namespace App\Http\Controllers;

use App\brand;
use App\category;
use App\custom_field;
use App\product;



use App\product_image;
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
       return $this->productService->store($request);
    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->productService->productDetails($id);
    }
    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function get_by_category($category_id)
    {
        return $this->productService->productsByCategory($category_id);

    }
    /**
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function get_all()
    {
     return $this->productService->appearProducts();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return $this->productService->edit($product);
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
        return $this->productService->update($request,$product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        return $this->productService->delete($product);


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->productService->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->productService->create();
    }



}
