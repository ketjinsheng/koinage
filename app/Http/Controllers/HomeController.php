<?php

namespace App\Http\Controllers;

use App\Coin;
use App\User;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Address as AddressResource;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::id();
        $coinBalance = Wallet::selectRaw('sum(balance) as balance')->addSelect(
            ['symbol'=> Coin::select('symbol')->whereColumn('id','coin_id'), 'coin_id']
            )->whereIn('address_id',function($q) use ($user){
                $q->select('id')->from('addresses')->where('user_id',$user);
            })->groupBy('coin_id')
        ->get()->toArray();
        return view('home')->with('coinBalance',$coinBalance);
    }
}
