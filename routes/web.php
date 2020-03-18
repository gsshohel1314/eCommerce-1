7<?php

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();
//website routes
Route::get('', 'WebsiteController@index')->name('');
Route::get('about', 'WebsiteController@about')->name('');
Route::get('contact', 'WebsiteController@contact')->name('');

Route::get('blog', 'WebsiteBlogController@index')->name('');
Route::get('blog/details', 'WebsiteBlogController@details')->name('');

Route::get('product', 'WebsiteProductController@index')->name('');
Route::get('product/details', 'WebsiteProductController@details')->name('');

Route::post('contact/submit', 'WebsiteProcessController@contact')->name('');



//admin panel routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin', 'AdminController@index')->name('');
Route::get('admin/user', 'UserController@index')->name('');
Route::get('admin/user/add', 'UserController@add')->name('');
Route::get('admin/user/view/{id}', 'UserController@view')->name('');
Route::get('admin/user/edit/{id}', 'UserController@edit')->name('');
Route::post('admin/user/registration', 'UserController@insert')->name('');
Route::post('admin/user/update', 'UserController@update')->name('');

Route::get('admin/contactus', 'ContactUsController@index')->name('');
Route::get('admin/contactus/view/{slug}', 'ContactUsController@view')->name('');

Route::get('admin/media', 'MediaController@media')->name('');
Route::post('admin/media/submit', 'MediaController@mediaUpdate')->name('');



Route::get('admin/brandRecycle', 'BrandRecycleController@index')->name('');
Route::get('admin/brandRecycle/{id}', 'BrandRecycleController@restore')->name('');
Route::get('admin/brandRecycle/show/{id}', 'BrandRecycleController@show')->name('');
Route::delete('admin/brandRecycle/{id}', 'BrandRecycleController@destroy')->name('');

Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
  Route::resource('categories', 'CategoryController');
  Route::resource('brands', 'BrandController');
  Route::resource('products', 'ProductController');
});

Route::get('admin/productRecycle', 'ProductRecycleController@index')->name('');
