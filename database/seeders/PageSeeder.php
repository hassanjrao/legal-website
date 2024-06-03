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
        Page::truncate();
        Page::create([
            'name' => 'home',
            'title' => 'Home',
            'meta_tags'=>'<meta name="description" content="Home Page Meta Description"> <meta name="keywords" content="Home Page Meta Keywords">',
            'is_static'=>1,
        ]);

        Page::create([
            'name' => 'about',
            'title' => 'About',
            'is_static'=>1,
            'meta_tags'=>'<meta name="description" content="About Page Meta Description"> <meta name="keywords" content="About Page Meta Keywords">',
        ]);

        Page::create([
            'name' => 'contact',
            'title' => 'Contact',
            'is_static'=>1,
            'meta_tags'=>'<meta name="description" content="Contact Page Meta Description"> <meta name="keywords" content="Contact Page Meta Keywords">',
        ]);

        Page::create([
            'name' => 'attorneys',
            'title' => 'Attorneys',
            'is_static'=>1,
            'meta_tags'=>'<meta name="description" content="Attorneys Page Meta Description"> <meta name="keywords" content="Attorneys Page Meta Keywords">',
        ]);

        Page::create([
            'name' => 'practice-areas',
            'title' => 'Practice Areas',
            'is_static'=>1,
            'meta_tags'=>'<meta name="description" content="Practice Areas Page Meta Description"> <meta name="keywords" content="Practice Areas Page Meta Keywords">',
        ]);

        Page::create([
            'name' => 'case-studies',
            'title' => 'Case Studies',
            'is_static'=>1,
            'meta_tags'=>'<meta name="description" content="Case Studies Page Meta Description"> <meta name="keywords" content="Case Studies Page Meta Keywords">',
        ]);

        Page::create([
            'name' => 'blogs',
            'title' => 'Blogs',
            'is_static'=>1,
            'meta_tags'=>'<meta name="description" content="Blogs Page Meta Description"> <meta name="keywords" content="Blogs Page Meta Keywords">',
        ]);
    }
}
