<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();
            $table->string("request_id")->nullable();
            $table->string("from_address")->nullable();
            $table->string("to_address")->nullable();
            $table->unsignedBigInteger("coin_id")->nullable();
            $table->foreign("coin_id")->references("id")->on("coins");
            $table->bigInteger("amount")->nullable();
            $table->string("tx_id")->nullable();
            $table->integer("exchange_id")->nullable();
            $table->enum('status',['pending','success','failed']);
            $table->integer("fee")->nullable();
            $table->string("remark")->nullable();
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
        Schema::dropIfExists('withdraws');
    }
}
