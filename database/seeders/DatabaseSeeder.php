<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Database\Seeders\TagsSeeder;
use Database\Seeders\PostsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(TagsSeeder::class);
        //$this->call(PostsSeeder::class);
        \App\Models\Post::factory(40)->create();
    }
}
