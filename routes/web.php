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




Route::prefix('admin')->group(function (){
    Route::get('/login-form', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/loged-In', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/register/refers-id={id}','Auth\RefersController@showRegistrationForm');
Route::post('/refer/register','Auth\RefersController@create')->name('refer.register');

Route::get('/payment/btc',function () {
    return view('btc.example_basic');
})->name('btcPayment');

Route::get('/payment',function () {
    return view('paymentMenu');
})->name('payment');

Route::get('/test',function()
{
    $id = 1;
    $user = \App\User::find($id);
    return view('test',[
    'user' => $user
    ]);
});
Route::get('/perfect-MoneyPayment',function (){
   return view('PerfectMoney');
})->name('perfectMoney');
//Route::post('/getmsg','TestController@index')->name('msg');

Route::get('/click-adds-{id}','AddsController@index')->name('addsclick');
Route::post('/ad/click', 'AddsController@clickAd')->name('ad.click');

Route::get('/upgrade-account','HomeController@upgradeAccount')->name('upgrade.account');

