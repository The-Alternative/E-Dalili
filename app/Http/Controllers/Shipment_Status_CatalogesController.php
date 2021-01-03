<?php

namespace App\Http\Controllers;

use App\Service\Shipment_Status_CatalogService;
use App\Shipment_Status_Catalog;
use Illuminate\Http\Request;

class Shipment_Status_CatalogesController extends Controller
{
    private $shipmentStatusCatalogService;

    public function __construct(Shipment_Status_CatalogService  $shipment_Status_CatalogService)
    {
        $this->shipmentStatusCatalogService=$shipment_Status_CatalogService;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return $this->shipmentStatusCatalogService->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return $this->shipmentStatusCatalogService->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        return $this->shipmentStatusCatalogService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \App\Shipment_Status_Catalog[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->shipmentStatusCatalogService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Shipment_Status_Catalog $shipment_Status_Catalog)
    {
        return $this->shipmentStatusCatalogService->edit($shipment_Status_Catalog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response|string
     */
    public function update(Request $request, Shipment_Status_Catalog $shipment_Status_Catalog)
    {
        return $this->shipmentStatusCatalogService->update($request,$shipment_Status_Catalog);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response|void
     */
    public function destroy(Shipment_Status_Catalog $shipment_Status_Catalog)
    {
        return $this->shipmentStatusCatalogService->destroy($shipment_Status_Catalog);
    }
}
