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


Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/brands','BrandsController');
Route::resource('/categories','CategoriesController');
Route::resource('/countries','CountriesController');
Route::resource('/custom_fields','Custom_FieldsController');
Route::resource('/languages','LanguagesController');
Route::get('/products/get_all','ProductsController@get_all');
Route::resource('/products','ProductsController');
Route::get('/products/get_by_category/{category_id}','ProductsController@get_by_category');
Route::resource('/products','ProductsController');
Route::resource('/products','ProductsController');
Route::patch('/products/get_all','ProductsController@get_all');
Route::get('/trashed_brands', 'BrandsController@trashed')->name('trashed.index');
Route::get('/stores/addProducts','StoresController@addProducts');
Route::resource('/stores','StoresController');
Route::get('/stores/updateProducts','StoresController@updateProducts');
Route::resource('/stores','StoresController');
Route::get('/stores/getAllStores','StoresController@getAllStores');
Route::resource('/stores','StoresController');
Route::get('/stores/getAproovedStores','StoresController@getAproovedStores');
Route::resource('/stores','StoresController');
Route::get('/stores/getActiveStores','StoresController@getActiveStores');
Route::resource('/stores','StoresController');
Route::get('/stores/comparePrices/{product}','StoresController@comparePrices')->name('store.comparePrices');
Route::resource('/stores','StoresController');
Route::resource('/stores','StoresController');
