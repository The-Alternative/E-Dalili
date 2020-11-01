<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//route('products.get_all');

Route::resource('/brands','BrandsController');
Route::resource('/categories','CategoriesController');
Route::resource('/countries','CountriesController');
Route::resource('/custom_fields','Custom_FieldsController');
Route::resource('/languages','LanguagesController');
Route::resource('/product_categories','Product_CategoriesController');
Route::get('/products/get_all','ProductsController@get_all');
Route::resource('/products','ProductsController');
Route::get('/products/get_by_category/{category_id}','ProductsController@get_by_category');
Route::resource('/products','ProductsController');
Route::resource('/products','ProductsController');
Route::resource('/product_customfields','Product_CustomFieldsController');

//Route::post('/products/get_all','ProductsController@get_all');
Route::patch('/products/get_all','ProductsController@get_all');
Route::get('/trashed_brands', 'BrandsController@trashed')->name('trashed.index');
