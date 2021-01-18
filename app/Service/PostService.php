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
      public function index()
      {

             return view('Post.index')->with('Posts',Post::all()->where('is_active',true));

      }
      public function create()
      {
              return view('Post.create')->with('Posts',Post::all());

      }

     public function store(Request $request)
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

          $post ->save();
       return response()->json($post);

     }
     public function postDetails($id)
     {
       return $this->postmodel::all()->where('id',$id);

     }

     public function edit($post)
     {
         return view('Post.create')->with('post',$post);

     }

     public function destroy($post)
     {
            $response = $post::update([
                'is_active' => false,
            ]);
         }


}
