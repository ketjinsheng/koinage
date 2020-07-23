<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        $notification=Notification::all();
        return view('notification')->with('notifications',$notification);
    }

}
