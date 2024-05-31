<?php

namespace Database\Seeders;

use App\Models\BlogComment;
use Illuminate\Database\Seeder;

class BlogCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogComment::create([
            'blog_id' => 2,
            'name' => 'John Doe',
            'email' => 'j@m.com',
            'message' => 'This is a test comment'
        ]);


        BlogComment::create([
            'blog_id' => 2,
            'name' => 'John Doe',
            'email' => 'j@m.com',
            'message' => 'This is a test comment'
        ]);


        BlogComment::create([
            'blog_id' => 2,
            'name' => 'John Doe',
            'email' => 'j@m.com',
            'message' => 'This is a test comment'
        ]);


        BlogComment::create([
            'blog_id' => 2,
            'name' => 'John Doe',
            'email' => 'j@m.com',
            'message' => 'This is a test comment'
        ]);


        BlogComment::create([
            'blog_id' => 2,
            'name' => 'John Doe',
            'email' => 'j@m.com',
            'message' => 'This is a test comment'
        ]);


        BlogComment::create([
            'blog_id' => 2,
            'name' => 'John Doe',
            'email' => 'j@m.com',
            'message' => 'This is a test comment'
        ]);


        BlogComment::create([
            'blog_id' => 2,
            'name' => 'John Doe',
            'email' => 'j@m.com',
            'message' => 'This is a test comment'
        ]);
    }
}
