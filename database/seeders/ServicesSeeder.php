<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'image_path'=>'images/service1.png',
            'title'=>'Fight Against Injustice',
            'description'=>'Seeking justice in the world is a sed significant emotional and investment when we follow this call.'
        ]);

        Service::create([
            'image_path'=>'images/service1.png',
            'title'=>'Legal Consultation',
            'description'=>'Seeking justice in the world is a sed significant emotional and investment when we follow this call.'
        ]);

        Service::create([
            'image_path'=>'images/service1.png',
            'title'=>'Legal Consultation',
            'description'=>'Seeking justice in the world is a sed significant emotional and investment when we follow this call.'
        ]);
    }
}
