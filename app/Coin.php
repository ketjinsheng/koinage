<?php

namespace App;

use App\Wallet;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $guarded=[];

    public function wallet(){
        return $this->hasMany(Wallet::class);
    }
}
