<?php

namespace App\Http\Controllers;

use App\Coin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoinController extends Controller
{
    public function index(){
        // $support_coins = DB::table('support_coin')->get();
        // $networks = DB::table('networks')->get();
        // foreach ($support_coins as $support_coin) {
        //     //foreach ($networks as $network)
        //         $coin = new Coin;
        //         $coin->id = $support_coin->id;
        //         $coin->symbol = $support_coin->coin_name;
        //         // if ($coin->symbol == $network->name) {
        //         //     $coin->network_id = $network->id;
        //         // }
        //         $coin->smart_contract = $support_coin->smart_contract;
        //         $coin->save();
        // }
        $coin=Coin::all();
        return view('coin')->with('coins',$coin);
    }

    public function add(Request $request){
        $coin=new Coin;
        $coin->symbol=$request->symbol;
        $coin->network_id=$request->network_id;
        $coin->decimal=$request->decimal;
        $coin->smart_contract=$request->smart_contract;
        $coin->save();

        return back();
    }
}
