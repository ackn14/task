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

Route::group(['prefix'=>'admin'],function(){
    route::get('news/create','Admin\NewsController@add');
    
    //課題番号２(22)
    route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
    
    route::get('news/create','Admin\NewsController@add')->middleware('auth');
    
    //課題番号３(27)
    route::get('profile/edit','Admin\ProfileController@add')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
