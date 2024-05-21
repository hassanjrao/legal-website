<?php

namespace Database\Seeders;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class CaseStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CaseStudy::create([
            'image_path'=>'images/case1.jpg',
            'title'=>'Fight Against Injustice',
            'subtitle'=>'Corporate Law',
            'description'=>'Seeking justice in the world is a sed significant emotional and investment when we follow this call.'
        ]);

        CaseStudy::create([
            'image_path'=>'images/case2.jpg',
            'title'=>'Legal Consultation',
            'subtitle'=>'Criminal Law',
            'description'=>'Seeking justice in the world is a sed significant emotional and investment when we follow this call.'
        ]);

        CaseStudy::create([
            'image_path'=>'images/case3.jpg',
            'title'=>'Accident Case',
            'subtitle'=>'Personal Injury',
            'description'=>'Seeking justice in the world is a sed significant emotional and investment when we follow this call.'
        ]);
    }
}
