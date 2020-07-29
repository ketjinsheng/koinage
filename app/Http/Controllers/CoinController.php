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
        // $client = new \GuzzleHttp\Client();
        // $header = [
        //     'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkYXRhIjoiZGV3d2VuQGdtYWlsIiwiaXAiOiIwLjAuMC4wIiwiaWF0IjoxNTk1NDc0MDk0fQ.1EtSF8TraID2fIC90jRbBnQZ6i5lg0ddgaFGa02q6N0'
        // ];

        // $body = [
        //     "type" => "ETH",
        //     "walletId" => "PI0DpcXKLuRZUkiHpQ5qeecIS7Nfc1iDvMcRAAkK96z9DDy18AT8AYiPtaguTdhwwSDNLEWofqWnShDu+fXfMe2cCk2T8qy/TX05eDXqjwbrmtrgBFNo5Y+fWxWUpudL",
        //     "email" => "dewwen@gmail",
        //     "index" => "1"
        // ];

        // $res = $client->request('POST', 'https://stageapi.koinage.cc/eth/createAddress', [
        //     'json' => $body,
        //     'headers' => $header,
        // ]);

        // $response = json_decode($res->getBody(),true);
        $user_email = Auth::user()->email;
        $coin_id = $request->coin_id;
        $coins = Coin::all();
        foreach ($coins as $coin) {
            if ($coin->id == $coin_id){
                $symbol = $coin->symbol;
                $type = $coin->network_id;
            }
        }
        $client = new \GuzzleHttp\Client();
        $header = [
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkYXRhIjoiZGV3d2VuQGdtYWlsIiwiaXAiOiIwLjAuMC4wIiwiaWF0IjoxNTk1NDc0MDk0fQ.1EtSF8TraID2fIC90jRbBnQZ6i5lg0ddgaFGa02q6N0'
        ];

        $body = [
            "type" => $symbol,
            "email" => $user_email
        ];

        try {
            $res = $client->request('POST', 'https://stageapi.koinage.cc/eth/createWallet', [
                'json' => $body,
                'headers' => $header,
            ]);
        } catch (\Exception $e) {
            alert()->error('You have created the coin before');
            return back();
        }
        $response = json_decode($res->getBody(),true);
        // foreach ($coins as $coin) {
        //     // if ($coin->symbol == $response['data']['type'])
        //     if ($coin->symbol == $symbol)
        //         $type = $coin->network_id;
        // }
        if ($response['status'] == 'success') {
            $address = new Address;
            $address->address = $response['data']['address'];
            $address->user_id = Auth::id();
            $address->label = $response['data']['label'];
            $address->network_id = $type;
            $address->save();
            
            $wallet = new Wallet;
            $wallet->address_id = $address->id;
            $wallet->coin_id = $request->coin_id;
            $wallet->balance = 0;
            $wallet->save();

            $user = Auth::user();
            $user->api_key = $response['data']['walletId'];
            $user->save();
            alert()->success('You have successfully added '.$symbol.'.');
            return back();
        } else {
            alert()->error('You have created the coin before');
        }
    }
}
