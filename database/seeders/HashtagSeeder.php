<?php

namespace Database\Seeders;

use App\Models\Bot;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HashtagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Hashtag');
        for($h = 0;$h <=30;$h++){
            $bot_id = Bot::pluck('id')->random();
            DB::table('hashtags')->insert([
                'bot_id' => $bot_id,
                'name' => $faker->word(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
