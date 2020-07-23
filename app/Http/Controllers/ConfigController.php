<?php

namespace App\Http\Controllers;

use App\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
    public function index(){
        // $wallet_configs = DB::table('wallet_configure')->get();
        // foreach ($wallet_configs as $wallet_config) {
        //     $config = new Config;
        //     $config->id = $wallet_config->id;
        //     $config->hour_spent_limit = $wallet_config->spending_limit_hour;
        //     $config->day_spent_limit = $wallet_config->spending_limit_day;
        //     $config->spent_limit = $wallet_config->spending_limit_transaction;
        //     $config->required_confirmation = $wallet_config->confirmation;
        //     $config->gas_price = $wallet_config->gas_price;
        //     $config->block_num = $wallet_config->blockNum;
        //     $config->lower_acc_threshold = $wallet_config->treshold_value;
        //     $config->upper_acc_threshold = $wallet_config->transfer_value;
        //     $config->save();
        // }
        $config=Config::all();
        return view('config')->with('configs',$config);
    }
}
