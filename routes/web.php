<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/user', 'UserController@index');
Route::get('/{coin_id}/address', 'AddressController@index');
Route::get('/{coin_id}/history','AddressController@history');

Route::get('/withdraw/{address}/{coin_id}','AddressController@address_withdraw');
Route::post('/withdraw','AddressController@withdraw');
Route::get('/{coin_id}/withdraw/{address}','AddressController@withdrawal');
Route::get('/{coin_id}/receive/{address}','AddressController@receive');
Route::get('/coin', 'CoinController@index');
Route::post('/addcoin', 'CoinController@add');
Route::get('/wallet', 'WalletController@index');
Route::get('/autogather', 'AutogatherController@index');
Route::get('/notification', 'NotificationController@index');
Route::get('/config','ConfigController@index');
Route::get('/description','DescriptionController@index');
Route::get('/withdraw','WithdrawController@index');
Route::get('/deposit','DepositController@index');
Route::get('/network','NetworkController@index');
Route::get('/setting','UserController@setting');
Route::get('/profile','UserController@profile');

Route::get('verify/resend', 'Auth\TwoFactorController@resend')->name('verify.resend');
Route::resource('verify', 'Auth\TwoFactorController')->only(['index', 'store']);

Route::group(['middleware' => ['auth', 'twofactor']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});