<?php


namespace App\Service;

use App\Post_Image;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;




class PostImageService
{
    private $postimagemodel;

    public function __construct(Post_Image $image)
    {
        $this->postimagemodel=$image;

    }
    public function getAllImages()
    {
        $image = DB :: table( 'post__images')
            ->where('is_active','=',1)
            ->get();
        return response()->json($image);
    }

    public function getById($id)
    {
        $image = Post_Image:: find($id);

        return response()->json($image);

    }


    public function createNewImage(Request $request)
    {

        $image=new Post_Image();

        $image-> name       = $request-> name;
        $image-> url         = $request-> url;
        $image-> is_active   = $request->is_active;


        $image ->save();
        return response()->json($image);

    }


    public function updateImage($id ,Request $request)
    {
        $image= Post_Image :: find($id);


        $image-> name        = $request-> name;
        $image-> url         = $request-> url;
        $image-> is_active   = $request->is_active;


        $image ->save();
        return response()->json($image);

    }
    public function DeleteImage($id,Request $request)
    {
        $image= Post_Image :: find($id);

        $image->is_active=$request->is_active;

        $image->save();

        return  response()->json($image);

    }



}
