<?php

namespace Database\Seeders;

use App\Models\Bot;
use App\Models\Subject;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            "Sociology",
            "Computer science",
            "IT",
            "Environmental studies",
            "Technology",
            "Geography",
            "Math",
            "Algebra",
            "Calculus",
            "Statistics ",
            "Computer technology",
            "Biology",
            "Chemistry",
            "Business",
            "Logistics",
            "Programming",
            "Python",
            "Java",
            "Natural resource",
            "English",
            "Ms Powerpoint",
            "Ms Excel",
            "Ms Word",
            "Public Health",
            "HealthCare",
            "Ms Access",
            "History",
            "Computer",
            "Proposals",
            "Economics",
            "Statistics",
            "Algebra",
            "Calculus",
            "Online classes",
            "Ecology",
            "Finance",
            "Psychology",
            "Physics",
            "Course Modules",
            "Coding projects",
        ];
        Subject::truncate();
        foreach ($subjects as $subject){
            $bot_id = Bot::pluck('id')->random();
            DB::table('subjects')->insert([
                'bot_id' => $bot_id,
                'name' => $subject,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
