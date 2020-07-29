<?php

namespace App\Http\Controllers;

use App\Config;
use Illuminate\Http\Request;


class SettingController extends Controller
{
    public function setting()
    {
        $config = Config::all();
        return view('setting')->with('configs', $config);
    }
}
