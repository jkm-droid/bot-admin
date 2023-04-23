<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(BotSeeder::class);
        $this->call(HashtagSeeder::class);
        $this->call(KeywordSeeder::class);
        $this->call(HeadingSeeder::class);
        $this->call(SloganSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(UniversitySeeder::class);
    }
}
