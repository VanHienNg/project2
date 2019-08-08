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

//Route Laravel homepage
Route::get('/', function () {
    return view('welcome');
});

//Route admin page
Route::get('/admin', 'PagesController@showstaff');

//Route CRUD Ajax
Route::resource('/admin', 'AjaxController');
