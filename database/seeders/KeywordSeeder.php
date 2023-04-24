<?php

namespace Database\Seeders;

use App\Models\Bot;
use App\Models\Keyword;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keywords = [
            "Casestudy",
            "Homeworkhelp",
            "Assignment help",
            "Researchpaper due??",
            "Assignmenthelp",
            "Researchpaper",
            "Essay help",
            "Homeworkdue??",
            "Essay pay",
            "Essay due",
            "Discussion help",
            "essaypay",
            "assignmentpay",
            "hwslave",
            "homeworkslave",
            "Psychology Paper",
            "Math help",
            "Dissertation due",
            "Thesis due",
            "Online class",
            "Capstone projects",
            "Discussions",
            "Research projects",
            "Masters",
            "Literature review",
            "Anatomy class",
            "Maths",
            "English class",
            "philosophy"
        ];
        Keyword::truncate();

        $faker = Faker::create('App\Keyword');
        foreach ($keywords as $keyword){
            $bot_id = Bot::pluck('id')->random();
            $type = $faker->randomElement(['reddit','twitter']);
            DB::table('keywords')->insert([
                'bot_id' => $bot_id,
                'name' => $keyword,
                'type' => $type,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
