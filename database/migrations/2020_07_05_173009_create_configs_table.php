<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id")->nullable();
            // $table->foreign("user_id")->references("id")->on("users");
            $table->unsignedBigInteger("network_id")->nullable();
            // $table->foreign("network_id")->references("id")->on("networks");
            $table->integer("lower_acc_threshold")->nullable();
            $table->integer("upper_acc_threshold")->nullable();
            $table->integer("required_confirmation")->nullable();
            $table->integer("spent_limit")->nullable();
            $table->integer("day_spent_limit")->nullable();
            $table->integer("hour_spent_limit")->nullable();
            $table->double("gas_price")->nullable();
            $table->integer("block_num")->nullable();
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
        Schema::dropIfExists('configs');
    }
}
