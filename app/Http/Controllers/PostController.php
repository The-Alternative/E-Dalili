<?php

namespace App\Http\Controllers;



use App\Post;




use App\Service\PostService;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $PostService;


    public function __construct(PostService $PostService)
    {
        $this->PostService=$PostService;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View\Illuminate\Http\Response
     *
     */
    public function getAllPosts ()
    {
        $response= $this->PostService->getAllPosts();
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
        $response= $this->PostService->getById($id);
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
    public function createNewPost(Request $request)
    {
        $response= $this->PostService->createNewPost($request);
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
    public function updatePost(Request $request, $id)
    {
        $response= $this->PostService->updatePost($id , $request);
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
    public function DeletePost($id,Request $request)
    {
        $response= $this->PostService->DeletePost($id, $request);
        return  response($response,200)
            ->header('Access-control-Allow-Origin','*')
            ->header('Access-control-Allow-Methods','*');

    }
}
