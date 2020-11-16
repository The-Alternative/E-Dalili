<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\product;
use App\Service\StoreService;
use App\Store;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoresController extends Controller
{
    private $storeService;
    private $response;

    public function __construct(StoreService $storeService,Response  $response)
    {
        $this->storeService=$storeService;
        $this->response=$response;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stores.index')->with('stores',Store::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stores.create')->with('users',User::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->response= $this->storeService->createStore($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = $this->storeService->storeDetails($id);
        return $response;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        return view(stores.edit,[
           'store'      => $store,
           'users'      =>User::all(),
           'products'   =>product::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Store $store)
    {
        $response = $this->storeService->update($request,$store);
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        $response = $this->storeService->deleteStore($store);
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addProducts(Request $request,Store $store)
    {
        $response = $this->storeService->addProductsToStore($request,$store);
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProducts(Request $request,Store $store)
    {
        $response = $this->storeService->updateProducts($request,$store);
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getAllStores()
    {
        $response = $this->storeService->stores();
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getAproovedStores()
    {
        $response = $this->storeService->approvedStores();
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getActiveStores()
    {
        $response = $this->storeService->activeStores();
        return $response;
    }


}

