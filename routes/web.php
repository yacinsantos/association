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

/*Loading the welcome page for all viewers*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*User Interface*/
Route::get('/home', 'HomeController@index');

/*Admin Interface*/
Route::prefix('admin')->group(function(){
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/formations', 'AdminFormationController@create')->name('formation.add');
    Route::post('/formations', 'AdminFormationController@store')->name('formation.add.submit');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
});