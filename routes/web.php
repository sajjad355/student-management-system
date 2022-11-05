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
Route::get('/login1',"StudentController@index2") ->middleware('statusChecker') ;
Route::get('/',"StudentController@index")->middleware('statusChecker')  ;
Route::get('/logoutt',"StudentController@logoutt") ;
Route::get('/notice1',"NoticeController@index1");
Route::get('/notice',"StudentController@notice") ->middleware('statusChecker') ;
Route::get('/report',"StudentController@home") ->middleware('statusChecker') ;
Route::get('/login',"StudentController@login") ;
Route::get('/batch',"BatchController@index")->middleware('statusChecker') ; 
Route::get('/createbatch',"BatchController@create")->middleware('statusChecker') ;
Route::get('/edit/{id}',"StudentController@edit") ->middleware('statusChecker') ;
Route::get('/editPayment/{id}',"StudentController@editPayment") ->middleware('statusChecker') ;

Route::get('/editnotice/{id}',"StudentController@editnotice") ->middleware('statusChecker') ;
Route::get('/editbatch/{id}',"BatchController@edit")->middleware('statusChecker') ;
Route::get('/show/{id}',"StudentController@show")->middleware('statusChecker') ;
Route::get('/Profile',"StudentController@Profile") ->middleware('statusChecker') ;
Route::get('/showbatch/{id}',"BatchController@show")->middleware('statusChecker') ;
Route::get('/showstudents/{id}',"BatchController@showstudents") ->middleware('statusChecker');
Route::get('/create',"StudentController@create") ->middleware('statusChecker') ;
Route::get('/createnotice',"StudentController@createnotice")->middleware('statusChecker') ;
Route::post('/search',"StudentController@search")->middleware('statusChecker') ;
Route::post('/store',"StudentController@store") ->middleware('statusChecker') ;
Route::post('/storenotice',"StudentController@storenotice")->middleware('statusChecker')  ;
Route::post('/MI',"StudentController@income")->middleware('statusChecker')  ;

Route::post('/batchstore',"BatchController@store")->middleware('statusChecker') ;
Route::post('/paymentstore',"studentController@paymentstore") ->middleware('statusChecker') ;
Route::post('/checklogin',"StudentController@checklogin")->middleware('statusChecker')  ;
Route::post('/update/{id}',"StudentController@update") ->middleware('statusChecker') ;
Route::post('/updatePayment/{id}',"StudentController@updatePayment") ->middleware('statusChecker') ;
Route::post('/updatenotice/{id}',"StudentController@updatenotice") ->middleware('statusChecker') ;
Route::post('/updateprofile',"StudentController@updateprofile") ->middleware('statusChecker') ;
Route::post('/updatepassword',"StudentController@updatepassword") ->middleware('statusChecker') ;
Route::get('/changePassword',"StudentController@changePassword") ->middleware('statusChecker') ;

Route::get('/createpayment/{id}',"StudentController@newpayment") ->middleware('statusChecker') ;
Route::get('/deletehistory/{id}',"StudentController@deletehistory")->middleware('statusChecker')  ;

Route::post('/updatebatch/{id}',"BatchController@update") ->middleware('statusChecker');
Route::get('/destroy/{id}',"StudentController@destroy") ->middleware('statusChecker') ;
Route::get('/destroy1/{bid}/{id}',"StudentController@destroy1") ->middleware('statusChecker') ;
Route::get('/destroynotice/{id}',"StudentController@destroynotice")->middleware('statusChecker')  ;
Route::get('/payment/{id}',"StudentController@payment") ->middleware('statusChecker') ;
Route::get('/destroybatch/{id}',"BatchController@destroy") ->middleware('statusChecker');


Route::get('/student',"StudentViewController@index");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
