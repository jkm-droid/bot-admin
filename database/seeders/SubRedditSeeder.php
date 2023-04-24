<?php

namespace Database\Seeders;

use App\Models\Bot;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubRedditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\SubReddit');
        for ($sb = 0;$sb <=50;$sb++){
            $bot = Bot::pluck('id')->random();
            DB::table('sub_reddits')->insert([
                'bot_id' => $bot,
                'sub_reddit_name' => $faker->word(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
