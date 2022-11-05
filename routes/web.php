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


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',"StudentController@index") ;
Route::get('/home',"StudentController@home") ;
Route::get('/login',"StudentController@login") ;
Route::get('/batch',"BatchController@index") ;
Route::get('/createbatch',"BatchController@create") ;
Route::get('/edit/{id}',"StudentController@edit") ;
Route::get('/editbatch/{id}',"BatchController@edit") ;
Route::get('/show/{id}',"StudentController@show") ;
Route::get('/showbatch/{id}',"BatchController@show") ;
Route::get('/create',"StudentController@create") ;
Route::post('/search',"StudentController@search") ;
Route::post('/store',"StudentController@store") ;
Route::post('/batchstore',"BatchController@store") ;
Route::post('/checklogin',"StudentController@checklogin") ;
Route::post('/update/{id}',"StudentController@update") ;
Route::post('/updatebatch/{id}',"BatchController@update") ;
Route::get('/destroy/{id}',"StudentController@destroy") ;
Route::get('/destroybatch/{id}',"BatchController@destroy") ;

