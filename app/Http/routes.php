<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index','IndexController@index');

Route::any('admin/login','Admin\LoginController@login');
Route::get('admin/code','Admin\LoginController@code');
/*Route::get('admin/getcode','Admin\LoginController@getcode');*/

/*Route::group(['middleware'=>['web']],function (){

    Route::any('admin/login','Admin\LoginController@login');
    Route::any('admin/code','Admin\LoginController@code');

});*/