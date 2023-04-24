<?php

namespace Database\Seeders;

use App\Models\Bot;
use App\Models\University;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $universities = [
            "Harvard University",
            "Stanford University",
            "Grand Canyon University",
            "Yale University",
            "Columbia University",
            "Princeton University",
            "New York University (NYU)",
            "University of Pennsylvania",
            "University of Chicago",
            "Cornell University",
            "Duke University",
            "Johns Hopkins University",
            "University of Southern California",
            "Northwestern University",
            "Carnegie Mellon University",
            "University of Michigan ",
            "Brown University",
            "Boston University",
            "Emory University",
            "Rice University",
        ];
        University::truncate();

        $faker = Faker::create('App\University');
        foreach ($universities as $university){
            $bot_id = Bot::pluck('id')->random();
            DB::table('universities')->insert([
                'bot_id' => $bot_id,
                'name' => $university,
                'country' => $faker->randomElement(["Saudi Arabia","USA","Israel"]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
