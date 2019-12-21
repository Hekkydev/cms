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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'employee'], function () {
    Route::group(['prefix' => 'directory'], function () {
        Route::get('/',['as'=>'employee.directory.index','uses'=>'Employee\EmployeeController@index']);
    });
});

Route::group(['prefix' => 'organization'], function () {
    
});