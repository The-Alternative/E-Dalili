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

Route::get('/brands/show/{id}','BrandsController@show')->name('brands.show');
Route::resource('/brands','BrandsController');
Route::get('/trashed_brands', 'BrandsController@trashed')->name('trashed.index');

Route::get('/categories/show/{id}','CategoriesController@show')->name('categories.show');
Route::resource('/categories','CategoriesController');

Route::get('/countries/show/{id}','CountriesController@show')->name('countries.show');
Route::resource('/countries','CountriesController');

Route::get('/custom_fields/show/{id}','Custom_FieldsController@show')->name('custom_fields.show');
Route::resource('/custom_fields','Custom_FieldsController');

Route::get('/languages/show/{id}','LanguagesController@show')->name('languages.show');
Route::resource('/languages','LanguagesController');

Route::get('/products/show/{id}','ProductsController@show')->name('products.show');
Route::get('/products/get_all','ProductsController@get_all');
Route::resource('/products','ProductsController');
Route::get('/products/get_by_category/{category_id}','ProductsController@get_by_category');
Route::resource('/products','ProductsController');
Route::resource('/products','ProductsController');
Route::patch('/products/get_all','ProductsController@get_all');


Route::get('/stores/show/{id}','StoresController@show')->name('stores.show');
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

Route::get('/cities/show/{id}','CitiesController@show')->name('cities.show');
Route::resource('/cities','CitiesController');

Route::get('/currencies/show/{id}','CurrenciesController@show')->name('currencies.show');
Route::resource('/currencies','CurrenciesController');

Route::get('/governorates/show/{id}','GovernoratesController@show')->name('governorates.show');
Route::resource('/governorates','GovernoratesController');

Route::get('/orderDetails/show/{id}','OrderDetailsController@show')->name('orderDetails.show');
Route::resource('/orderDetails','OrderDetailsController');

Route::get('/orders/show/{id}','OrdersController@show')->name('orders.show');
Route::resource('/orders','OrdersController');

Route::get('/orderStatuses/show/{id}','OrderStatusController@show')->name('orderStatuses.show');
Route::resource('/orderStatuses','OrderStatusController');

Route::get('/payments/show/{id}','PaymentsController@show')->name('payments.show');
Route::resource('/payments','PaymentsController');

Route::get('/productStoreRatings/show/{id}','ProductStoreRatingsController@show')->name('productStoreRatings.show');
Route::resource('/productStoreRatings','ProductStoreRatingsController');

Route::get('/shipment_Status_Cataloges/show/{id}','Shipment_Status_CatalogesController@show')->name('shipment_Status_Cataloges.show');
Route::resource('/shipment_Status_Cataloges','Shipment_Status_CatalogesController');

Route::get('/shipment_Statuses/show/{id}','Shipment_StatusessController@show')->name('shipment_Statuses.show');
Route::resource('/shipment_Statuses','Shipment_StatusessController');

Route::get('/shipment_Types/show/{id}','Shipment_TypesController@show')->name('shipment_Types.show');
Route::resource('/shipment_Types','Shipment_StatusessController');

Route::get('/shippings/show/{id}','ShippingsController@show')->name('shippings.show');
Route::resource('/shippings','ShippingsController');

Route::get('/store_Category_Images/show/{id}','Store_Category_ImagesController@show')->name('store_Category_Images.show');
Route::resource('/store_Category_Images','Store_Category_ImagesController');

Route::get('/store_Designs/show/{id}','Store_DesignsController@show')->name('store_Designs.show');
Route::resource('/store_Designs','Store_DesignsController');

Route::get('/store_Header_Images/show/{id}','Store_Header_ImagesController@show')->name('store_Header_Images.show');
Route::resource('/store_Header_Images','Store_Header_ImagesController');

Route::get('/store_Nav_Designs/show/{id}','Store_Nav_DesignsController@show')->name('store_Nav_Designs.show');
Route::resource('/store_Nav_Designs','Store_Nav_DesignsController');

Route::get('/storeRatings/show/{id}','StoreRatingsController@show')->name('storeRatings.show');
Route::resource('/storeRatings','StoreRatingsController');

Route::get('/streets/show/{id}','StreetsController@show')->name('streets.show');
Route::resource('/streets','StreetsController');


