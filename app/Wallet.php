<?php

namespace App;

use App\Coin;
use App\Address;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{

    protected $guarded=[];

    public function address(){
        return $this->belongsTo(Address::class);
    }

    public function coin(){
        return $this->belongsTo(Coin::class);
    }
}
