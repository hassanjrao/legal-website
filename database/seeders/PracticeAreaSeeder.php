<?php

namespace Database\Seeders;

use App\Models\PracticeArea;
use Illuminate\Database\Seeder;

class PracticeAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PracticeArea::create([
            'title' => 'Criminal Law',
            'image_path' => 'images/service1.png',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        PracticeArea::create([
            'title' => 'Family Law',
            'image_path' => 'images/service2.png',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        PracticeArea::create([
            'title' => 'Business Law',
            'image_path' => 'images/service3.png',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);


        PracticeArea::create([
            'title' => 'Insurance Law',
            'image_path' => 'images/service4.png',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        PracticeArea::create([
            'title' => 'Employment Law',
            'image_path' => 'images/service5.png',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        PracticeArea::create([
            'title' => 'Personal Injury Law',
            'image_path' => 'images/service6.png',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        PracticeArea::create([
            'title' => 'Real Estate Law',
            'image_path' => 'images/service7.png',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

    }
}
