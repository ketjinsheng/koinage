<?php

namespace App\Http\Controllers;

use App\Network;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NetworkController extends Controller
{
    public function index() {
        // $coins = DB::table('coins')->get();
        // foreach ($coins as $coin) {
        //     if ($coin->smart_contract == NULL)  
        //         $network = new Network;
        //         $network->name = $coin->symbol;
        //         $network->save();
        // }
        return view('network');
    }   
}
