<?php

namespace App\Http\Controllers;

use App\brand;
use App\Models\partner;
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
    public function index()
    {
        return $this->PostService->index();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->PostService->create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->PostService->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->PostService->postDetails($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Post $post)
    {
        return $this->PostService->edit($post);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->PostService->update($id , $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $post= Post::find($id);

        $post->is_active=$request->is_active;

        $post->save();

        return  response()->json($post);

    }
}
