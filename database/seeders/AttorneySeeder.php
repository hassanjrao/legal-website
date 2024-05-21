<?php

namespace Database\Seeders;

use App\Models\Attorney;
use Illuminate\Database\Seeder;

class AttorneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attorney::create([
            'image_path'=>'images/person_1.jpg',
            'name'=>'Mike Fisher',
            'position'=>'Criminal Law',
            'description'=>'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.'
        ]);

        Attorney::create([
            'image_path'=>'images/person_2.jpg',
            'name'=>'Jean Smith',
            'position'=>'Personal Injury',
            'description'=>'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.'
        ]);

        Attorney::create([
            'image_path'=>'images/person_3.jpg',
            'name'=>'Philip Scott',
            'position'=>'Corporate Law',
            'description'=>'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.'
        ]);


        Attorney::create([
            'image_path'=>'images/person_2.jpg',
            'name'=>'Jean Smith',
            'position'=>'Personal Injury',
            'description'=>'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.'
        ]);

        Attorney::create([
            'image_path'=>'images/person_3.jpg',
            'name'=>'Philip Scott',
            'position'=>'Corporate Law',
            'description'=>'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.'
        ]);
    }
}
