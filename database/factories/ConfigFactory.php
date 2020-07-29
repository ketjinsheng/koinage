<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Config;

use Faker\Generator as Faker;

$factory->define(Config::class, function (Faker $faker) {
    return [

        'user_id' => $faker->numberBetween(50, 100),
        'network_id' => $faker->numberBetween(50, 100),
        'lower_acc_threshold' => $faker->numberBetween(50, 100),
        'upper_acc_threshold' => $faker->numberBetween(50, 100),
        'required_confirmation' => $faker->numberBetween(50, 100),
        'spent_limit' => $faker->numberBetween(50, 100),
        'day_spent_limit' => $faker->numberBetween(50, 100),
        'hour_spent_limit' => $faker->numberBetween(50, 100),
        'gas_price' => $faker->numberBetween(50, 100),
        'block_num' => $faker->numberBetween(50, 100),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
