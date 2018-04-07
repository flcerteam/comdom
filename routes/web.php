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
Route::get('add-to-cart/{id}',[
  'as'=>'themgiohang',
  'uses'=>'PageController@getAddToCart'
]);
