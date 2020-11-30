<?php

namespace App\Http\Controllers;

use App\Service\Store_category_imageService;
use App\Store_Category_Image;
use Illuminate\Http\Request;

class Store_Category_ImagesController extends Controller
{

    private $storeCategoryImageService;

    public function __construct(Store_category_imageService $storeCategoryImageServiceService)
    {
        $this->storeCategoryImageService=$storeCategoryImageServiceService;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return $this->storeCategoryImageService->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return $this->storeCategoryImageService->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        return $this->storeCategoryImageService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Store_Category_Image[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->storeCategoryImageService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Store_Category_Image $store_Category_Image)
    {
        return $this->storeCategoryImageService->edit($store_Category_Image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector|string
     */
    public function update(Request $request,Store_Category_Image $store_Category_Image)
    {
        return $this->storeCategoryImageService->update($request,$store_Category_Image);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Store_Category_Image $store_Category_Image)
    {
        return $this->storeCategoryImageService->destroy($store_Category_Image);
    }
}
