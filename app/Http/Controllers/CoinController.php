<?php

namespace App\Http\Controllers;

use App\Coin;
use App\Wallet;
use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $client = new \GuzzleHttp\Client();
        $header = [
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkYXRhIjoiZGV3d2VuQGdtYWlsIiwiaXAiOiIwLjAuMC4wIiwiaWF0IjoxNTk1NDc0MDk0fQ.1EtSF8TraID2fIC90jRbBnQZ6i5lg0ddgaFGa02q6N0'
        ];

        $body = [
            "type" => "ETH",
            "walletId" => "PI0DpcXKLuRZUkiHpQ5qeecIS7Nfc1iDvMcRAAkK96z9DDy18AT8AYiPtaguTdhwwSDNLEWofqWnShDu+fXfMe2cCk2T8qy/TX05eDXqjwbrmtrgBFNo5Y+fWxWUpudL",
            "email" => "dewwen@gmail",
            "index" => "1"
        ];

        $res = $client->request('POST', 'https://stageapi.koinage.cc/eth/createAddress', [
            'json' => $body,
            'headers' => $header,
        ]);
        
        $response = json_decode($res->getBody(),true);
        
        $address = new Address;
        $address->address = $response['address'];
        $address->user_id = Auth::id();
        $address->label = 0;
        $address->network_id = $request->coin_id;
        $address->save();
        
        $wallet = new Wallet;
        $wallet->address_id = $address->id;
        $wallet->coin_id = $request->coin_id;
        $wallet->balance = 0;
        $wallet->save();

        return back();
    }
}
