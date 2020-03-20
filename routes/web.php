<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/Route::resource('products', 'ProductController');
Route::get('products.index', ['as' => 'products.index', 'uses' => 'ProductController@index']);
Route::get('/', function () {
    return view('welcome');
});
//Route::get('admin.index', ['as' => 'admin.index', 'uses' => 'UserController@index']);
route::group(['prefix'=>'admin'],function() {
  Route::get('admin.register', [ 'as' => 'register', 'uses' => 'UserController@register']);
//    Route::post('store',[ 'as' => 'store', 'uses' =>  'UserController@store']);
  route::get('admin.login',[ 'as' => 'admin.index', 'uses' => 'UserController@login']);
    route::get('admin.layout',[ 'as' => 'admin.layout', 'uses' => 'UserController@layout']);
//    route::post('login',[ 'as' => 'login', 'uses' => 'UserController@postlogin']);
//    Route::get('logout',[ 'as' => 'logout', 'uses' => 'UserController@logout']);
    Route::resource('user', 'userController');
});

