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




Route::get('/customer/index', 'CustomerController@index')->name('customer.index');
Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
Route::post('/customer/store', 'CustomerController@store')->name('customer.store');
Route::get('/customer/destroy', 'CustomerController@destroy')->name('customer.destroy');
Route::get('/customer/edit', 'CustomerController@edit')->name('customer.edit');

Route::get('/customer_type/index', 'CustomerTypeController@index')->name('customer_type.index');
Route::get('/customer_type/create', 'CustomerTypeController@create')->name('customer_type.create');
Route::post('/customer/store', 'CustomerController@store')->name('customer.store');
Route::get('/customer/destroy', 'CustomerController@destroy')->name('customer.destroy');
Route::get('/customer/edit', 'CustomerController@edit')->name('customer.edit');

Route::get('/bunch/index', 'BunchController@index')->name('bunch.index');
Route::get('/bunch/create', 'BunchController@create')->name('bunch.create');
Route::post('/bunch/store', 'BunchController@store')->name('bunch.store');
Route::get('/bunch/destroy', 'BunchController@destroy')->name('bunch.destroy');
Route::get('/bunch/edit', 'BunchController@edit')->name('bunch.edit');

Route::get('/bunch_details/index', 'BunchDetailsController@index')->name('bunch_details.index');
Route::get('/bunch_details/create', 'BunchDetailsController@create')->name('bunch_details.create');
Route::post('/bunch_details/store', 'BunchDetailsController@store')->name('bunch_details.store');
Route::get('/bunch_details/destroy', 'BunchDetailsController@destroy')->name('bunch_details.destroy');
Route::get('/bunch_details/edit', 'BunchDetailsController@edit')->name('bunch_details.edit');

Route::get('/social_media/index', 'SocialMediaController@index')->name('social_media.index');
Route::get('/social_media/create', 'SocialMediaController@create')->name('social_media.create');
Route::post('/social_media/store', 'SocialMediaController@store')->name('social_media.store');
Route::get('/social_media/destroy', 'SocialMediaController@destroy')->name('social_media.destroy');
Route::get('/social_media/edit', 'SocialMediaController@edit')->name('social_media.edit');

//this routes only for general admin role
//Route::middleware(['auth','generalAdmin'])->group(function(){
    Route::get('/employee/index', 'EmployeeController@index')->name('employee.index');
    Route::get('/employee/create', 'EmployeeController@create')->name('employee.create');
    Route::post('/employee/store', 'EmployeeController@store')->name('employee.store');
    Route::get('/employee/destroy', 'EmployeeController@destroy')->name('employee.destroy');
    Route::get('/employee/{employee}/edit', 'EmployeeController@edit')->name('employee.edit');
  //  Route::resource('/products','EmployeeController');
   // Route::resource('/products','EmployeeController');
    
    Route::get('/permission/index', 'PermissionController@index')->name('permission.index');
    Route::get('/permission/create', 'PermissionController@create')->name('permission.create');
    Route::post('/permission/store', 'PermissionController@store')->name('permission.store');
    Route::get('/permission/destroy', 'PermissionController@destroy')->name('permission.destroy');
    Route::get('/permission/{permission}/edit', 'PermissionController@edit')->name('permission.edit');

    Route::get('/role/index' ,'RoleController@index' )->name('role.index');
    Route::get('/role/create' ,'RoleController@create' )->name('role.create');
    Route::post('/role/store', 'RoleController@store')->name('role.store');
    Route::get('/role/destroy', 'RoleController@destroy')->name('role.destroy');
    Route::get('/role/edit', 'RoleController@edit')->name('role.edit');
    
//});






