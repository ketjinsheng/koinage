<?php

namespace App\Http\Controllers;

use App\Autogather;
use Illuminate\Http\Request;

class AutogatherController extends Controller
{
    public function index(){
        $autogather=Autogather::all();
        return view('autogather')->with('autogathers',$autogather);
    }

}
