<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            // Poblar posts
            factory(App\Post::class, 60)->create();

            // Poblar tags
            factory(App\Tag::class, 10)->create();

            // Todos los tahs
            $tags = App\Tag::all();

            // Poblar la tabla pivote
            App\Post::all()->each(function ($post) use ($tags) { 
                $post->tags()->attach([
                    rand(1, 10), rand(1, 10), rand(1, 10)]
                ); 
            });
    }
}
