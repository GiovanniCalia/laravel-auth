<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++){
            $title = $faker->words(rand(2, 10), true);

            Post::create([
                'title'         => $title,
                'slug'          => Post::generateSlug($title),
                'creator'       => $faker->name(),
                'description'   => $faker->text(rand(100, 800)),
                'image'         => $faker->imageUrl(640, 480, true),
                'date_creation' => $faker->dateTime(),
            ]);
        }
    }
}
