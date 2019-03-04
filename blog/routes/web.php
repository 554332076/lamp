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
    return view('Admin.layout');
});
//类别路由
Route::get('/cates/create/{id}','Admin\CatesController@create');
Route::resource('cates','Admin\CatesController');
//商品路由
Route::get('/goods','Admin\GoodsController@index');
Route::resource('goods','Admin\GoodsController');
//轮播图管理
Route::resource('lbts','Admin\LbtsController');
//推荐位管理
Route::resource('tjws','Admin\TjwController');
//网站配置管理
Route::resource('sets','Admin\SetsController');