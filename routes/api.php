<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware'=>['api','checkPassword']],function(){
    Route::get ('/stores/getAllStores', 'StoresController@getAllStores');
    Route::post ('/stores/getStoreById', 'StoresController@getStoreById');


});

Route::post('/posts/createNewPost','PostController@createNewPost');

Route::put ('/post/update/{id}', 'PostController@updatePost');

Route::put ('/post/delete/{id}', 'PostController@DeletePost');


//////// Post Image Controller

Route::post('/images/createNewImage','PostImageController@createNewImage');
Route::put ('/images/update/{id}', 'PostImageController@updateImage');
Route::put ('/image/delete/{id}', 'PostImageController@DeleteImage');


Route::get ('/stores/getAllStores', 'StoresController@getAllStores');

