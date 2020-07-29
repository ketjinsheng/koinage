<?php

use App\Config;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Str;
// use Illuminate\Support\Facades\DB;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Config::class, 50)->create();
        // $faker = Faker\Factory::create();

        // $limit = 10;

        // for ($i = 0; $i < $limit; $i++) {
        //     Config::create([
        //         'user_id' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        //         'network_id'  => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        //         'lower_acc_threshold' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        //         'upper_acc_threshold' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        //         'required_confirmation' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        //         'spent_limit' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        //         'day_spent_limit' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        //         'hour_spent_limit' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        //         'gas_price' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        //         'block_num'  => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        //         'created_at' => \Carbon\Carbon::now(),
        //         'updated_at' => \Carbon\Carbon::now(),
        //     ]);
        // }
    }
}
