<?php

namespace Database\Seeders;

use App\Models\Bot;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SloganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slogans = [
            "Guaranteed excellent grades and timely delivery in:",
            "We guarantee quality work and original content in:",
            "Use a professional writing service in:",
            "Excel in:",
            "We deliver the best services in:",
            "For quality results DM us today",
        ];
        foreach ($slogans as $slogan){
            $bot_id = Bot::pluck('id')->random();
            DB::table('slogans')->insert([
                'bot_id' => $bot_id,
                'name' => $slogan,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
