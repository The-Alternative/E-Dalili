<?php


namespace App\Service;

use App\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PostService
{
     private $postmodel;

      public function __construct(post $post)
      {
          $this->postmodel=$post;

      }
      public function getAllPosts()
      {
            $post = DB :: table( 'Posts')
              ->where('is_active','=',1)
              ->get();
              return response()->json($post);
      }

      public function getById($id)
          {
            $post = Post:: find($id);

            return response()->json($post);

          }


     public function createNewPost(Request $request)
     {
              if ($request->is_active){
                         $is_active=true;
                     }else{
                         $is_active=false;
                     }


          $post=new Post();

            $post-> store_id        = $request-> store_id;
            $post-> product_id      = $request-> product_id;
            $post-> description     = $request-> description;
            $post-> is_active       = $request->is_active;
            $post-> price           = $request-> price;
            $post-> new_price       = $request-> new_price;
            $post-> start_date      = $request-> start_date;
            $post-> end_date        = $request-> end_date;
            $post-> time            = $request-> time;
            $post-> Post_Type       = $request-> Post_Type ;

          $post ->save();
       return response()->json($post);

     }


     public function updatePost($id ,Request $request)
     {
        $post= Post :: find($id);

        $post-> store_id         = $request ->store_id;
        $post-> product_id       = $request->product_id;
        $post-> description      = $request-> description;
        $post-> is_active        = $request->is_active;
        $post-> price            = $request-> price;
        $post-> new_price        = $request-> new_price;
        $post-> start_date       = $request-> start_date;
        $post-> end_date         = $request-> end_date;
        $post-> time             = $request-> time;
        $post-> Post_Type        = $request-> Post_Type ;

        $post->save();
        return response()->json($post);

     }
      public function DeletePost($id,Request $request)
         {
             $post= Post::find($id);

             $post->is_active=$request->is_active;

             $post->save();

             return  response()->json($post);

         }



}
