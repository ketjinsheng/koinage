<?php

namespace App\Http\Controllers;

use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WithdrawController extends Controller
{
    public function index(){   
        // $withdraws_from_old = DB::table('withdraw')->get();
        // foreach ($withdraws_from_old as $withdraw_from_old) {
        //     $withdraw = New Withdraw;
        //     $coin = DB::table('coins')->where('symbol',$withdraw_from_old->type)->get();
        //     $withdraw->coin_id = $coin->first()->id;
        //     $withdraw->id = $withdraw_from_old->id;
        //     $withdraw->request_id = $withdraw_from_old->request_id;
        //     $withdraw->from_address = $withdraw_from_old->sender;
        //     $withdraw->to_address = $withdraw_from_old->receiver;
        //     $withdraw->amount = $withdraw_from_old->amount;
        //     $withdraw->created_at = $withdraw_from_old->time_create;
        //     $withdraw->tx_id = $withdraw_from_old->txid;
        //     $withdraw->status = $withdraw_from_old->status;
        //     $withdraw->remark = $withdraw_from_old->remark;
        //     $withdraw->fee = $withdraw_from_old->networkFee;
        //     $withdraw->save();
        // }
        $withdraw=Withdraw::all();
        return view('withdraw')->with('withdraws',$withdraw); 
    }


}
