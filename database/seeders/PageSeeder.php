<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'name' => 'home',
            'title' => 'Home',
            'meta_tags'=>'<meta name="description" content="Home Page Meta Description"> <meta name="keywords" content="Home Page Meta Keywords">',
        ]);

        Page::create([
            'name' => 'about',
            'title' => 'About',
            'meta_tags'=>'<meta name="description" content="About Page Meta Description"> <meta name="keywords" content="About Page Meta Keywords">',
        ]);

        Page::create([
            'name' => 'contact',
            'title' => 'Contact',
            'meta_tags'=>'<meta name="description" content="Contact Page Meta Description"> <meta name="keywords" content="Contact Page Meta Keywords">',
        ]);

        Page::create([
            'name' => 'attorneys',
            'title' => 'Attorneys',
            'meta_tags'=>'<meta name="description" content="Attorneys Page Meta Description"> <meta name="keywords" content="Attorneys Page Meta Keywords">',
        ]);

        Page::create([
            'name' => 'practice-areas',
            'title' => 'Practice Areas',
            'meta_tags'=>'<meta name="description" content="Practice Areas Page Meta Description"> <meta name="keywords" content="Practice Areas Page Meta Keywords">',
        ]);

        Page::create([
            'name' => 'case-studies',
            'title' => 'Case Studies',
            'meta_tags'=>'<meta name="description" content="Case Studies Page Meta Description"> <meta name="keywords" content="Case Studies Page Meta Keywords">',
        ]);

        Page::create([
            'name' => 'blogs',
            'title' => 'Blogs',
            'meta_tags'=>'<meta name="description" content="Blogs Page Meta Description"> <meta name="keywords" content="Blogs Page Meta Keywords">',
        ]);
    }
}
