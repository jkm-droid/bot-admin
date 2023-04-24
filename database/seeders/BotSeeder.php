<?php

namespace Database\Seeders;

use App\Models\Bot;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bot::truncate();

        $faker = Faker::create('App\Bot');
        for ($b = 1;$b <= 10;$b++){
            $user = User::pluck('id')->random();
            $type = $faker->randomElement(['reddit','twitter']);
            DB::table('bots')->insert([
                'user_id' => $user,
                'bot_name' => $type.'-bot-'.$user,
                'type' => $type,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
