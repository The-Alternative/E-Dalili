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
        return $this->PostService->getAllPosts();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getById($id)
    {
        return $this->PostService->getById($id);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createNewPost(Request $request)
    {
        return $this->PostService->createNewPost($request);
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
        return $this->PostService->updatePost($id , $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DeletePost($id,Request $request)
    {
        return $this->PostService->DeletePost($id, $request);

    }
}
