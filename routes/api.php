<?php

use Illuminate\Http\Request;
use App\Article;
use App\Staff;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Staff Route
Route::get('staff', 'StaffController@index');
Route::get('staff/{staff}', 'StaffController@show');
Route::post('staff', 'StaffController@store');
Route::put('staff/{staff}', 'StaffController@update');
Route::delete('staff/{staff}', 'StaffController@delete');

// Article Route
Route::get('articles', 'ArticleController@index');
Route::get('articles/{article}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{article}', 'ArticleController@update');
Route::delete('articles/{article}', 'ArticleController@delete');


