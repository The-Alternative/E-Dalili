<?php


namespace App\Service;


use App\Store_Rating;

class Store_RatingService
{
    private $storeRatingModel;

    public function __construct(Store_Rating $rating){
        $this->storeRatingModel = $rating;
    }

    public function index(){
        return view('store_ratings.index')->with('storeRatings',Store_Rating::all());
    }

    public function create(){
        return view('store_ratings.create')->with('users',User::all())
            ->with('stores',Store::all()->where('is_active',true));
    }

    public function store($request){

        $response=$this->storeRatingModel::create([
            'user_id'           => (int)$request->user_id,
            'store_id'          => (int)$request->store_id,
            'rating'            => $request->rating,
        ]);

        session()->flash('success','store rating created successfully');
        return redirect(route('store_ratings.index'));

    }

    public function show($id){
        return $this->storeRatingModel::all()->where('id',$id);
    }

    public function edit($rating){
        return view('store_ratings.create')->with('store_ratings',$rating)
            ->with('users',User::all())
            ->with('stores',Store::all()->where('is_active',true));
    }

    public function update($request,$rating){
        $response=$rating::update([
            'user_id'           => (int)$request->user_id,
            'store_id'          => (int)$request->store_id,
            'rating'            => $request->rating,
        ]);

        session()->flash('success','store rating updated successfully');
        return redirect(route('store_ratings.index'));

    }

    public function destroy($rating){
        $response=$rating::delete();
    }

}
