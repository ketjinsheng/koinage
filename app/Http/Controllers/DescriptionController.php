<?php

namespace App\Http\Controllers;

use App\Description;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    public function index(){
        $description=Description::all();
        return view('description')->with('descriptions',$description); 
}
}