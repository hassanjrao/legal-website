<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUs::updateOrCreate([
            'id'=>1,
        ],[
            'id'=>1,
            'image_path'=>'images/about.jpg',
            'video_path'=>'https://vimeo.com/45830194',
            'title'=>'Welcome to Legalcare',
            'subtitle'=>'We Always Fight For Your Justice to Win!',
            'description'=>'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia',
            'strip_text'=>'40 Years of Experience',
        ]);
    }
}
