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
        $response= $this->PostImageService-> getAllImages();
        return  response($response,200)
            ->header('Access-control-Allow-Origin','*')
            ->header('Access-control-Allow-Methods','*');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getById($id)
    {
        $response= $this->PostImageService->getById($id);
        return  response($response,200)
            ->header('Access-control-Allow-Origin','*')
            ->header('Access-control-Allow-Methods','*');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createNewImage(Request $request)
    {
        $response= $this->PostImageService->createNewImage($request);
        return  response($response,200)
            ->header('Access-control-Allow-Origin','*')
            ->header('Access-control-Allow-Methods','*');
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
        $response= $this->PostImageService->updateImage($id , $request);
        return  response($response,200)
            ->header('Access-control-Allow-Origin','*')
            ->header('Access-control-Allow-Methods','*');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DeleteImage($id,Request $request)
    {
        $response= $this->PostImageService->DeleteImage($id, $request);
        return  response($response,200)
            ->header('Access-control-Allow-Origin','*')
            ->header('Access-control-Allow-Methods','*');

    }
}
