<?php

namespace Database\Seeders;

use App\Models\AboutUsTab;
use Illuminate\Database\Seeder;

class AboutUsTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUsTab::create([
            'title'=>'Our Mission',
            'description'=>'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in',
        ]);

        AboutUsTab::create([
            'title'=>'Our Vission',
            'description'=>'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.',
        ]);

        AboutUsTab::create([
            'title'=>'Our Value',
            'description'=>'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.',
        ]);
    }
}
