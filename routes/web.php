<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
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
=======
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

>>>>>>> ecab934340c3f9d160e4dcda20d764461a67e367

// Auth::routes();
<<<<<<< HEAD
Route::livewire('email', 'board.email');
Route::livewire('email2', 'board.email2');
Route::livewire('msell', 'board.msell');
Route::livewire('setting', 'board.setting');
Route::livewire('login', 'board.login');

Route::get('fake-config', 'ConfigController@config');

=======
>>>>>>> af11d820f69ade30ceb032b413423d5a16959e43

// Route::get('/user', 'UserController@index');
// Route::get('/{coin_id}/address', 'AddressController@index');
// Route::get('/{coin_id}/deposit_history','AddressController@deposit_history');
// Route::get('/{coin_id}/withdraw_history','AddressController@withdraw_history');
// Route::get('/withdraw/{address}','AddressController@address_withdraw');
// Route::post('/withdraw','AddressController@withdraw');
// Route::get('/receive','AddressController@receive');
// Route::get('/coin', 'CoinController@index');
// Route::post('/addcoin', 'CoinController@add');
// Route::get('/wallet', 'WalletController@index');
// Route::get('/autogather', 'AutogatherController@index');
// Route::get('/notification', 'NotificationController@index');
// Route::get('/config','ConfigController@index');
// Route::get('/description','DescriptionController@index');
// Route::get('/withdraw','WithdrawController@index');
// Route::get('/deposit','DepositController@index');
// Route::get('/network','NetworkController@index');
<<<<<<< HEAD
Route::get('/setting', 'SettingController@setting');
=======
// Route::get('/setting','UserController@setting');

Route::livewire('home1', 'board.home');
Route::livewire('register', 'board.signup');
Route::livewire('2fa', 'board.twofactor');
// Route::livewire('2faVerify', 'board.twofactor');

>>>>>>> af11d820f69ade30ceb032b413423d5a16959e43

// Route::get('verify/resend', 'Auth\TwoFactorController@resend')->name('verify.resend');
// Route::resource('verify', 'Auth\TwoFactorController')->only(['index', 'store']);

// Route::group(['middleware' => ['auth', 'twofactor']], function () {
//     Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
// });
=======
// });
>>>>>>> af11d820f69ade30ceb032b413423d5a16959e43
