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
    return view('index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/edit-profile-{id}','UserController@edit')->name('edit.profile');
Route::post('/profile-upadate-{id}','UserController@update')->name('profile.update');
Route::get('/cashwithdraw-{id}','UserController@cashWithdraw')->name('cashwithdraw');
Route::get('/click-adds-{id}','UserController@addsClick')->name('addsclick');

Route::prefix('admin')->group(function (){
    Route::get('/login-form', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/loged-In', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/register/refers-id={id}','Auth\RefersController@showRegistrationForm');


