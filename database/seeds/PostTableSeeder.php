<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post([
            'title' => 'Learning Laravel',
            'content' => 'This post was created by Seeder '
        ]);
        $post->save();

        $post = new Post([
            'title' => 'Some Thing else',
            'content' => 'This post is another post that was created by Seeder '
        ]);
        $post->save();
    }
}
