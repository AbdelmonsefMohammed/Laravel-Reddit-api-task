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


Auth::routes();

Route::group(['middleware' => ['auth', 'Role'], 'roles' => ['admin']], function () {
    Route::resource('/employees', 'EmployeeController');

});

Route::group(['middleware' => ['auth']], function () {

    Route::get('/', 'AdminController@index')->name('admin');

    Route::resource('/employees', 'EmployeeController', ['only' => [
        'show', 'index',
    ]]);

    Route::get('/redditapi', 'RedditApiController@index')->name('reddit');

});

