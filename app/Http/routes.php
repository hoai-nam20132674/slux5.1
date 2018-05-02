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
    return view('frontEndUser.index');
});
Route::get('/cau-chuyen-slux.html', function () {
    return view('frontEndUser.slux-talk');
});
Route::get('/tin-tuc.html', function(){
	return view('frontEndUser.blog');
});
Route::get('/lien-he.html', function(){
	return view('frontEndUser.contact');
});
Route::get('/linh-phu-kien.html', function(){
	return view('frontEndUser.list-product');
});
Route::get('/view-product-item.html', function(){
	return view('frontEndUser.view-product-item');
});
Route::get('test',function(){
	return view ('welcome');
});


Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/postLogin', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@logout');
Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function(){
	Route::get('index','adminController@index');
	Route::get('getListCategories',['as'=>'getListCategories','uses'=>'adminController@getListCategories']);
	Route::get('addCategorie',['as'=>'addCategorie','uses'=>'adminController@addCategorie']);
	Route::post('postAddCategorie',['as'=>'postAddCategorie','uses'=>'adminController@postAddCategorie']);
	Route::get('editCategorie/{id}/{parent_id}',['as'=>'editCategorie','uses'=>'adminController@editCategorie']);
	Route::post('postEditCategorie/{id}',['as'=>'postEditCategorie','uses'=>'adminController@postEditCategorie']);
	Route::get('deleteCategorie/{id}/{parent_id}',['as'=>'deleteCategorie','uses'=>'adminController@deleteCategorie']);

	Route::get('getListBlogs',['as'=>'getListBlogs','uses'=>'adminController@getListBlogs']);
	Route::get('addBlog',['as'=>'addBlog','uses'=>'adminController@addBlog']);
	Route::post('postAddBlog',['as'=>'postAddBlog','uses'=>'adminController@postAddBlog']);
	Route::get('editBlog/{id}/{categorie_id}',['as'=>'editBlog','uses'=>'adminController@editBlog']);
	Route::post('postEditBlog/{id}',['as'=>'postEditBlog','uses'=>'adminController@postEditBlog']);
	Route::get('deleteBlog/{id}',['as'=>'deleteBlog','uses'=>'adminController@deleteBlog']);
});