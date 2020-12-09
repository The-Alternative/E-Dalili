<?php


namespace App\Service;


use App\product;
use App\Product_Store_Rating;

class Product_RatingService
{
    private $productStoreRatingModel;

    public function __construct(Product_Store_Rating $rating){
        $this->productStoreRatingModel = $rating;
    }

    public function index(){
        return view('product_store_ratings.index')->with('productRatings',Product_Store_Rating::all());
    }

    public function create(){
        return view('product_store_ratings.create')->with('users',User::all())
            ->with('stores',Store::all()->where('is_active',true))
            ->with('products',product::all()->where('is_active',true));
    }

    public function store($request){

        $response=$this->productStoreRatingModel::create([
            'user_id'           => (int)$request->user_id,
            'store_id'          => (int)$request->store_id,
            'product_id'        => (int)$request->product_id,
            'rating'            => $request->rating,
        ]);

        session()->flash('success','product rating created successfully');
        return redirect(route('product_store_ratings.index'));

    }

    public function show($id){
        return $this->productStoreRatingModel::all()->where('id',$id);
    }

    public function edit($rating){
        return view('product_store_ratings.create')->with('product_ratings',$rating)
            ->with('users',User::all())
            ->with('stores',Store::all()->where('is_active',true))
            ->with('products',product::all()->where('is_active',true));
    }

    public function update($request,$rating){
        $response=$rating::update([
                'user_id'           => (int)$request->user_id,
                'store_id'          => (int)$request->store_id,
                'product_id'        => (int)$request->product_id,
                'rating'            => $request->rating,
            ]);

        session()->flash('success','product rating updated successfully');
        return redirect(route('product_store_ratings.index'));

    }

    public function destroy($rating){
        $response=$rating::delete();
    }

}
