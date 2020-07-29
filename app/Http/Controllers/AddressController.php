<?php

namespace App\Http\Controllers;

use App\User;
use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\Address as AddressResource;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        //$addresses = User::where('id', Auth::id())->with(['address.wallet','address.wallet.coin'])->first()->address;
        $addresses = User::with(['address.wallet','address.wallet.coin'])->find(Auth::id())->address->where('wallet.coin.id',$request->coin_id);
        //$addresses = $user->address;  
        //dd(AddressResource::collection($addresses));    
        $coin_id = $request->coin_id;
        return view('address')->with(['addresses' => $addresses, 'coin_id' => $coin_id]);
    }

    public function address_withdraw(Request $request)
    {
        return view('address.withdraw');
    }

    // public function index(){
    //     // $wallet_addresses = DB::table('wallet_address')->get();;
    //     // foreach ($wallet_addresses as $wallet_address) {
    //     //     $address = New Address;
    //     //     $address->id = $wallet_address->id;
    //     //     $address->address = $wallet_address->address;
    //     //     $address->label = $wallet_address->label;
    //     //     $address->created_at = $wallet_address->time_create;
    //     //     $address->memo = $wallet_address->memo_id;
    //     //     $address->transaction_num = $wallet_address->Tran_no;
    //     //     $address->save();
    //     // }
    //     $address=Address::all();
    //     return view('address')->with('addresses',$address);
    // }

    public function withdraw() {
        $withdraw = new Withdraw;
        
    }

    public function deposit_history(Request $request) {
        $coin_id = $request->coin_id;
        return view('deposit_history')->with('coin_id',$coin_id);
    }

    public function withdraw_history(Request $request) {
        $coin_id = $request->coin_id;
        return view('withdraw_history')->with('coin_id',$coin_id);
    }

    public function receive(Request $request) {
        $coin_id = $request->coin_id;
        return view('qrcode')->with('coin_id',$coin_id);
    }

    public function create_address() {
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
        dd($response);
    }
}
