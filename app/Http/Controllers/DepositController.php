<?php

namespace App\Http\Controllers;

use App\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepositController extends Controller
{
    public function index(){
        // $deposits_from_old = DB::table('deposit')->get();
        // foreach ($deposits_from_old as $deposit_from_old) {
        //     $deposit = new Deposit;
        //     $coin = DB::table('coins')->where('symbol',$deposit_from_old->type)->get();
        //     $deposit->coin_id = $coin->first()->id;
        //     $deposit->id = $deposit_from_old->id;
        //     $deposit->tx_id = $deposit_from_old->txid;
        //     $deposit->memo = $deposit_from_old->memo;
        //     $deposit->amount = $deposit_from_old->amount;
        //     $deposit->status = $deposit_from_old->status;
        //     $deposit->to_address = $deposit_from_old->sender;
        //     $deposit->block_num = $deposit_from_old->blockNumber;
        //     $deposit->created_at = $deposit_from_old->time_create;
        //     $deposit->save();
        // }
        $deposit=Deposit::all();
        return view('deposit')->with('deposits',$deposit); 
    }

 
}