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

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    route::get('news/create','Admin\NewsController@add');
    route::get('profile/create','Admin\ProfileController@add');
    route::post('news/create','Admin\NewsController@create');
    
    //課題番号３
    route::post('profile/create','Admin\ProfileController@create');
    
    route::get('profile/edit','Admin\ProfileController@edit');
    
    //課題番号６
    route::post('profile/edit','Admin\ProfileController@update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


