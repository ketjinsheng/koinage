<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // $clients = DB::table('client')->get();
        // foreach($clients as $client) {
        //     $user = new User;
        //     $user->id = $client->id;
        //     $user->name = $client->username;
        //     $user->email = $client->email;
        //     $user->password = $client->password;
        //     $user->last_login = $client->lastLogin;
        //     $user->last_login_ip = $client->ip;
        //     $user->save();
        // }

        $user = User::all();
        return view('user')->with('users', $user);
    }

    // public function setting()
    // {
    //     return view('setting');
    // }
}
