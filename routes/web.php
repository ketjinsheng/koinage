<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::livewire('home1', 'board.home');
Route::livewire('home2', 'board.home2');
Route::livewire('/dashboard','board.dashboard')->name('dashboard');
Route::livewire('/walletmain', 'board.walletmain')->name('walletmain');
Route::livewire('/wallet-market', 'board.wallet-market')->name('wallet-market');
Route::livewire('/wallet-receivedeposit', 'board.wallet-receivedeposit')->name('wallet-receivedeposit');
Route::livewire('/wallet-sendwithdraw', 'board.wallet-sendwithdraw')->name('wallet-sendwithdraw');
Route::livewire('/wallet-buyonline', 'board.wallet-buyonline')->name('wallet-buyonline');
Route::livewire('/wallet-buycard', 'board.wallet-buycard')->name('wallet-buycard');
Route::livewire('/accountmain, board.accountmain')->name('accountmain');
Route::livewire('/history', 'board.history')->name('history');
Route::livewire('/logout', 'board.logout')->name('logout');


Auth::routes();

Route::get('/user', 'UserController@index');
Route::get('/{coin_id}/address', 'AddressController@index');
Route::get('/{coin_id}/deposit_history','AddressController@deposit_history');
Route::get('/{coin_id}/withdraw_history','AddressController@withdraw_history');
Route::get('/withdraw/{address}','AddressController@address_withdraw');
Route::post('/withdraw','AddressController@withdraw');
Route::get('/{coin_id}/receive','AddressController@receive');
Route::get('/create_address','AddressController@create_address');
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

Route::get('verify/resend', 'Auth\TwoFactorController@resend')->name('verify.resend');
Route::resource('verify', 'Auth\TwoFactorController')->only(['index', 'store']);

Route::group(['middleware' => ['auth', 'twofactor']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});