<?php

namespace Database\Seeders;

use App\Models\Bot;
use App\Models\Hashtag;
use App\Models\Heading;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Heading::truncate();

        $headings = [
            "Need help with your homework? DM us.",
            "We will do your assignments at reasonable rates.",
            "Customer satisfaction is our ultimate priority.",
            "Hire our professionals to ace your assignments.",
            "Struggling with your assignment(s)?",
            "Look no more for legit and affordable writers.",
            "Securing you top grades is our top priority.",
            "Struggling with your homework?",
            "Need help with your assignments?",
            "Dm us for quality case study at a fair cost.",
            "DM us for help in your homework.",
            "Pay us to do your assignment(s)",
            "DM for help in your assignments(s).",
            "Pay us to write your essay(s).",
            "Pay us to write your assignments(s).",
            "100% help in your assignment.",
            "100% assurance help in academic writing.",
            "Hire us for academic writing.",
            "Plagiarism free papers.",
            "Need help with an essay?",
            "We're a legit writing team.",
            "A+ assurance in your essay(s).",
            "A+ assured in your assignment(s).",
            "A+ assured in your academic work.",
            "Do you have assignments bothering you!",
            "We work hard to deliver that desired Grade A+.",
            "Kindly consider our services at an affordable fee.",
            "Get help from a professional team.",
            "Need a hand in your due assignments?",

        ];
        foreach ($headings as $heading){
            $bot_id = Bot::pluck('id')->random();
            DB::table('headings')->insert([
                'bot_id' => $bot_id,
                'name' => $heading,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }

}
