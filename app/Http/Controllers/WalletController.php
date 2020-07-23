<?php

namespace App\Http\Controllers;

use Auth;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WalletController extends Controller
{
    public function index(){        
        //$wallets=Wallet::where('user_id', Auth::id())->with('coin')->get();    
        // $addresses = DB::table('wallet_address')->get();   
        // foreach ($addresses as $address) {
        //     $wallet = new Wallet; 
        //     $coin = DB::table('coins')->where('symbol',$address->type)->get();
        //     $wallet->coin_id = $coin->first()->id;
        //     $wallet->address_id = $address->id;
        //     $wallet->balance = 0;
        //     $wallet->save();
        // }
        return view('wallet');
    }
}
