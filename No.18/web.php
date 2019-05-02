<?php
//課題番号１
//答．Routing

//課題番号２
//パスが同じ時に同じ処理を実行できる

//課題番号３
/*
Route::get('XXX', 'AAAController@bbb');
*/

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
    
    //課題番号４
    route::get('profile/create','Admin\ProfileController@add');
    route::get('profile/edit','Admin\ProfileController@edit');
    //
    
    route::get('news/create','Admin\NewsController@add')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
