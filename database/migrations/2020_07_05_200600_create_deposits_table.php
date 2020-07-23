<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->string("tx_id")->nullable();
            $table->unsignedBigInteger("coin_id")->nullable();
            $table->foreign("coin_id")->references("id")->on("coins");
            $table->string("to_address")->nullable();
            $table->bigInteger("amount")->nullable();
            $table->integer("block_num")->nullable();
            $table->enum('status',['pending','success','transfer']);
            $table->string("memo")->nullable();
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
        Schema::dropIfExists('deposits');
    }
}
