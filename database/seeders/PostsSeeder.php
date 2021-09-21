<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Pour simplifier les choses je me suis focalisé sur les 4 premiers tags 
        *  De plus, je n'ai pas assigné d'utilisateur pour les posts (ex: ajouter 'creator_id' pour chaque post)
        */
        /*
        Post::truncate();
        $faker = \Faker\Factory::create();
        // Creation des posts
        for($i=0; $i < 40; $i++){
          if($i <= 12) {
            Post::create([
                'tag_id' => 1,
                'title' => $faker->sentence,
                'desc' => $faker->realText(),            
            ]);
          }

          if($i <= 23) {
            Post::create([
                'tag_id' => 2,
                'title' => $faker->sentence,
                'desc' => $faker->realText(),            
            ]);
          }

          if($i <= 28) {
            Post::create([
                'tag_id' => 3,
                'title' => $faker->sentence,
                'desc' => $faker->realText(),            
            ]);
          }


          if($i <= 40) {
            Post::create([
                'tag_id' => 4,
                'title' => $faker->sentence,
                'desc' => $faker->realText(),            
            ]);
          }

        }
        */
    }
}
