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
        $this->call([
            UserSeeder::class,
            HomePageSeeder::class,
            AboutUsSeeder::class,
            AboutUsTabSeeder::class,
            ServicesSeeder::class,
            CaseStudySeeder::class,
            AttorneySeeder::class,
            TestimonialSeeder::class,
            BlogSeeder::class,
            PracticeAreaSeeder::class,
            PageSeeder::class,
            BlogCommentSeeder::class,
        ]);
    }
}
