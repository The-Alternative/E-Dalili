<?php

namespace App\Http\Controllers;

use App\Service\StreetService;
use App\Street;
use Illuminate\Http\Request;

class StreetsController extends Controller
{
    private $streetService;

    public function __construct(StreetService $streetService)
    {
        $this->streetService=$streetService;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return $this->streetService->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return $this->streetService->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        return $this->streetService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \App\Street[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->streetService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Street $street)
    {
        return $this->streetService->edit($street);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response|string
     */
    public function update(Request $request, Street $street)
    {
        return $this->streetService->update($request,$street);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response|void
     */
    public function destroy(Street $street)
    {
        return $this->streetService->destroy($street);
    }
}
