<?php

namespace App\Http\Controllers;

use App\Traits\GeneralTrait;
use App\Http\Requests\ProductRequest;
use App\product;
use App\Service\StoreService;
use App\Store;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoresController extends Controller
{
    use GeneralTrait;
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function index()
    {
        return $this->storeService->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function create()
    {
        return $this->storeService->create();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->storeService->createStore($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Store[]|\Illuminate\Database\Eloquent\Collection|Response
     */
    public function show($id)
    {
        return $this->storeService->storeDetailes($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function edit(Store $store)
    {
       return $this->storeService->edit($store);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return string
     */
    public function update(Request $request,Store $store)
    {
        return $this->storeService->update($request,$store);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response|void
     */
    public function destroy(Store $store)
    {
        return $this->storeService->deleteStore($store);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response|void
     */
    public function addProducts(Request $request,Store $store)
    {
        return $this->storeService->addProductsToStore($request,$store);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response|void
     */
    public function updateProducts(Request $request,Store $store)
    {
        return $this->storeService->updateProducts($request,$store);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Store[]|\Illuminate\Database\Eloquent\Collection|Response
     */
    public function getAllStores()
    {
        //return $this->storeService->stores();
        $response= $this->storeService->stores();
        return response($response, 200)
                    ->header('Access-Control-Allow-Origin', '*')
                    ->header('Access-Control-Allow-Methods', '*');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Store[]|\Illuminate\Database\Eloquent\Collection|Response
     */
    public function getAproovedStores()
    {
        return $this->storeService->approvedStores();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Store[]|\Illuminate\Database\Eloquent\Collection|Response
     */
    public function getActiveStores()
    {
        return $this->storeService->activeStores();

    }
    public function getStoreById(Request $request , Store $store)
    {
        return $this->storeService->getStoreById($request,$store);

    }

    public function comparePrices($productId)
    {
        return $this->storeService->comparePrices($productId);

    }


}

