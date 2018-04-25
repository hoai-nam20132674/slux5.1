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


Route::get('logout','Auth\loginController@logout');
Route::get('auth/login','Auth\loginController@getLogin');
Route::post('postLogin','Auth\loginController@postLogin');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	Route::get('index',['as'=>'index','uses'=>'adminController@index']);
});
