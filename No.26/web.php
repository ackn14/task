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
    route::get('news/create','Admin\NewsController@add')->middleware('auth');
    route::post('news/create','Admin\NewsController@create')->middleware('auth');
    route::get('news','Admin\NewsController@index')->middleware('auth');
    route::get('news/edit','Admin\NewsController@edit')->middleware('auth');
    route::post('news/edit','Admin\NewsController@update')->middleware('auth');
    route::get('news/delete','Admin\NewsController@delete')->middleware('auth');
});

Route::group(['prefix'=>'admin'],function(){
    route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
    route::post('profile/create','Admin\ProfileController@create')->middleware('auth');
    route::get('profile','Admin\ProfileController@index')->middleware('auth');
    route::get('profile/edit','Admin\ProfileController@edit')->middleware('auth');
    route::post('profile/edit','Admin\ProfileController@update')->middleware('auth');
    route::get('profile/delete','Admin\ProfileController@delete')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


