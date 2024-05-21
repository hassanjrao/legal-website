<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
            'name' => 'John Doe',
            'title'=>'CEO',
            'image_path'=>'images/person_1.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        Testimonial::create([
            'name' => 'Jane Doe',
            'title'=>'CTO',
            'image_path'=>'images/person_1.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        Testimonial::create([
            'name' => 'John Smith',
            'title'=>'COO',
            'image_path'=>'images/person_1.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        Testimonial::create([
            'name' => 'Jane Smith',
            'title'=>'CFO',
            'image_path'=>'images/person_1.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
    }
}
