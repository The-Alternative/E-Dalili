<?php

namespace App\Http\Controllers;

use App\Service\PostImageService;

use App\Http\Requests\PostImageRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostImageController extends Controller
{
    private $PostImageService;


    public function __construct(PostImageService $PostImageService)
    {
        $this->PostImageService=$PostImageService;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View\Illuminate\Http\Response
     *
     */
    public function getAllImages ()
    {
        return $this->PostImageService-> getAllImages();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getById($id)
    {
        return $this->PostImageService->getById($id);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createNewImage(Request $request)
    {
        return $this->PostImageService->createNewImage($request);
    }





    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateImage(Request $request, $id)
    {
        return $this->PostImageService->updateImage($id , $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DeleteImage($id,Request $request)
    {
        return $this->PostImageService->DeleteImage($id, $request);

    }
}
