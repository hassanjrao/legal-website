<?php

namespace Database\Seeders;

use App\Models\HomePage;
use Illuminate\Database\Seeder;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomePage::updateOrCreate([
            'id' => 1,
        ],[
            'id' => 1,
            'hero_welcome' => 'WELCOME TO LEGALCARE',
            'hero_title' => 'Attorneys Fighting For Your Rights.',
            'hero_description' => 'We have help thousands of people to get relief from national wide fights wrongfull denials. Now they trusted legalcare attorneys',
            'hero_button_text' => 'Get Legal Advice',
            'hero_bg_image_path' => 'images/hero-bg.jpg',

            'services_title' => 'Why Select Us?',
            'services_description' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your.',

            'footer_description'=>'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.',
            'opening_days' => 'Monday – Friday : 9am to 20 pm Saturday : 9am to 17 pm',
            'vacations' => 'All Sunday Days All Official Holidays',
            'address' => '198 West 21th Street, Suite 721 New York NY 10016',
            'phone' => '+ 1235 2355 98',
            'email' => 'info@legal.com',
            'copy_right_text' => '© 2021 LegalCare. All Rights Reserved.',


        ]);
    }
}
