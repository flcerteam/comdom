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

Route::get('/',[
  'as'=>'trang-chu',
  'uses'=>'PageController@getIndex'
]);
// Route::get('/login','UserController@login');
Route::get('index',[
  'as'=>'trang-chu',
  'uses'=>'PageController@getIndex'
]);
Route::get('loai-sp/{type}',[
  'as'=>'product-type',
  'uses'=>'PageController@getLoaiSp'
]);
Route::get('chi-tiet-sp/{id}',[
  'as'=>'product-detail',
  'uses'=>'PageController@getChiTietSp'
]);
Route::get('lien-he',[
  'as'=>'contact',
  'uses'=>'PageController@getLienHe'
]);
Route::get('gioi-thieu',[
  'as'=>'about',
  'uses'=>'PageController@getAbout'
]);
// Route::get('add-to-cart/{id}',[
//   'as'=>'themgiohang',
//   'uses'=>'PageController@getAddToCart'
// ]);
Route::post('add-to-cart','PageController@getAddToCart');
Route::post('get_customer_info','CheckOutController@getCustomerInfo');
//Route::get('add-to-cart','PageController@getGioHang');
Route::get('del-cache',function(){
  Session::flush();
  echo 'dm dai ca';
});
Route::get('dang-nhap',[
  'as'=>'login',
  'uses'=>'PageController@getLogin'
]);
Route::get('/search','PageController@getSearchItem')->name('search');
Route::get('/find', 'PageController@searchItem');
Route::get('dat-hang',[
  'as'=>'checkout',
  'uses'=>'PageController@getCheckOut'
]);
Route::get('del-cart/{id}',[
	'as'=>'xoagiohang',
	'uses'=>'PageController@getDelItemCart'
]);
Route::post('dat-hang',[
	'as'=>'checkout',
	'uses'=>'CheckOutController@postCheckout'
]);

<<<<<<< HEAD
Route::get('location',[
	'as'=>'location',
	'uses'=>'LocationsController@getInfo'
]);

Route::get('dtl-location',[
	'as'=>'dtl-location',
	'uses'=>'LocationDetailsController@getInfo'
]);
=======
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Route::get('admin/user', 'UserController@index');
>>>>>>> 8abd58c51bcd055027a0c8f82401b6ef151c9199
