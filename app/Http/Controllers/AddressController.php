<?php

namespace App\Http\Controllers;

use App\Coin;
use App\User;
use App\Address;
use App\Network;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $coin_id = $request->coin_id;
        $address = $request->address;
        return view('address.withdraw')->with(['coin_id' => $coin_id, 'address' => $address]);
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

    public function withdraw(Request $request) {
        $user_email = Auth::user()->email;
        $api_key = Auth::user()->api_key;
        $trading_pin = Auth::user()->trading_pin;
        $request_id = uniqid();
        $coins = Coin::all();
        $networks = Network::all();
        if ($request->network_id) {
            foreach ($networks as $network) {
                if ($network->id == $request->network_id) {
                    $symbol = $network->name;
                }
            }
        } else {
            foreach ($coins as $coin) {
                if ($coin->id == $request->coin_id) {
                    $symbol = $coin->symbol;
                }
            }
        }
        foreach ($coins as $coin) {
            if ($coin->network_id == $request->network_id && $coin->symbol == $symbol)
                $coin_id = $coin->id;
        }
        $client = new \GuzzleHttp\Client();
        $header = [
            'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkYXRhIjoiZGV3d2VuQGdtYWlsIiwiaXAiOiIwLjAuMC4wIiwiaWF0IjoxNTk1NDc0MDk0fQ.1EtSF8TraID2fIC90jRbBnQZ6i5lg0ddgaFGa02q6N0',
            'email' => $user_email
        ];

        $body = [
            "network" => $symbol,
            "api_key" => $api_key,
            "request_id" => $request_id,
            "from_addresses" => $request->from_address,
            "to_addresses" => $request->to_address,
            "amounts" => $request->amount
        ];

        try {
            $res = $client->request('POST', 'https://stageapi.koinage.cc/eth/withdraw', [
                'json' => $body,
                'headers' => $header,
            ]);
        } catch (\Exception $e) {
            alert()->error('Your Api Key is not valid');
            return back();
        }
        
        $response = json_decode($res->getBody(),true);

        if ($request->pin == $trading_pin) {
            $withdraw = new Withdraw;
            $withdraw->request_id = $request_id;
            $withdraw->from_address = $request->from_address;
            $withdraw->to_address = $request->to_address;
            $withdraw->coin_id = $request->coin_id;
            $withdraw->amount = $request->amount;
            
            $this->toAddress =  $withdraw->to_address;
            if ($response['status'] == 'failed') {
                alert()->error('You have insufficient fund or gas')->persistent('close');
                return back();
            } else {
                $withdraw->tx_id = $response['txid'];
                $withdraw->status = $response['status'];
                $withdraw->save();
                alert()->success('Withdraw is pending')->persistent('close');
                return back();
            }    
        } elseif ($request->pin != $trading_pin) {
            alert()->error('The trading pin does not match')->persistent('close');
            return back();
        }
    }

    public function withdrawal(Request $request) {
        $coin_id = $request->coin_id;
        $address = $request->address;
        return view('withdraw')->with(['coin_id' => $coin_id, 'address' => $address]);
    }

    public function history(Request $request) {
        $coin_id = $request->coin_id;
        return view('history')->with('coin_id',$coin_id);
    }

    public function receive(Request $request) {
        $coin_id = $request->coin_id;
        $address = $request->address;
        return view('qrcode')->with(['coin_id' => $coin_id, 'address' => $address]);
    }
}
