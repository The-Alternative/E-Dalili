<?php

namespace App\Http\Controllers;

use App\Service\Store_Nav_DesignService;
use App\Store_Nav_Design;
use Illuminate\Http\Request;

class Store_Nav_DesignsController extends Controller
{
    private $store_Nav_DesignService;

    public function __construct(Store_Nav_DesignService  $store_Nav_DesignService)
    {
        $this->store_Nav_DesignService=$store_Nav_DesignService;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return $this->store_Nav_DesignService->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return $this->store_Nav_DesignService->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        return $this->store_Nav_DesignService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \App\Store_Nav_Design[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->store_Nav_DesignService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Store_Nav_Design $store_Nav_Design)
    {
        return $this->store_Nav_DesignService->edit($store_Nav_Design);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Store_Nav_Design $store_Nav_Design)
    {
        return $this->store_Nav_DesignService->update($request,$store_Nav_Design);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response|void
     */
    public function destroy(Store_Nav_Design $store_Nav_Design)
    {
        return $this->store_Nav_DesignService->destroy($store_Nav_Design);
    }
}
