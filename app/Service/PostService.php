<?php


namespace App\Service;

use App\Post;
use http\Env\Request;
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

     public function store( $request)
     {
              if ($request->is_active){
                         $is_active=true;
                     }else{
                         $is_active=false;
                     }


            $response=$this->postModel::create([

             'store_id'       => $request-> store_id,
             'product_id'     => $request-> product_id,
             'social_media_id'=> $request-> social_media_id,
             'description'    => $request-> description,
             'is_active'      => $is_active,
             'price'          => $request-> price,
             'new_price'      => $request-> new_price,
             'start_date'     => $request-> start_date,
             'end_date'       => $request-> end_date,
             'time'           => $request-> time,

         ]);
       session()->flash('success','post created successfuly');
               return redirect(route('Post.index'));

     }
     public function postDetails($id)
     {
       return $this->postmodel::all()->where('id',$id);

     }

     public function edit($post)
     {
         return view('Post.create')->with('post',$post);

     }

     public function destroy($post){
            $response = $post::update([
                'is_active' => false,
            ]);
         }


}
