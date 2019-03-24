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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','OrderListController@index');

Route::get('/addorder/{order}','OrderController@add');
Route::get('/afterorder',function (){return view('userorder');})->name('afterorder');

Route::get('/dashboard',function (){return view('dashboard.index');});
Route::get('/dashboard/show_selection','OrderListController@showlist');
Route::get('/dashbord/getrss','OrderListController@getrss');
Route::get('/dashboard/orders','OrderController@index');