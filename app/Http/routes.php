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

// Route::get('/', function () {
//     return view('welcome');
// });


// Auth
Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
    Route::get('login', 'AuthController@postLogin')->name('auth.login');
    Route::get('logout', 'AuthController@getLogout')->name('auth.logout');
});


Route::group(['middleware' => 'auth'], function () {

    // Admin index
    Route::group(['namespace' => 'Admin'], function () {
        Route::get('/', 'AdminController@Index');
    });

    // RBAC
    Route::group(['prefix' => 'rbac', 'namespace' => 'Admin\RBAC'], function () {

        // permission
        Route::resource('permission', 'PermissionController');


    });






});
