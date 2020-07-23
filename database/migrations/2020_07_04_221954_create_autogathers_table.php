<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutogathersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autogathers', function (Blueprint $table) {
            $table->id();
            $table->string("from_address")->nullable();
            $table->string("hot_wallet")->nullable();
            $table->bigInteger("amount")->nullable();
            $table->unsignedBigInteger("coin_id")->nullable();
            $table->foreign("coin_id")->references("id")->on("coins");
            $table->enum('status',['pending','confirmed','rejected']);
            $table->string("tx_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autogathers');
    }
}
