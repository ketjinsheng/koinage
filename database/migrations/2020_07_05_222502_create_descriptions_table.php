<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descriptions', function (Blueprint $table) {
            $table->id();
            $table->string("request_id");
            $table->string("from_address");
            $table->string("to_address");
            $table->unsignedBigInteger("coin_id")->nullable();
            $table->foreign("coin_id")->references("id")->on("coins");
            $table->bigInteger("amount");
            $table->string("tx_id");
            $table->integer("exchange_id");
            $table->string("status");
            $table->float("fee");
            $table->string("remark");
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
        Schema::dropIfExists('descriptions');
    }
}
