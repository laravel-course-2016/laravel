<?php

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ru_RU');

        for ($i = 0; $i < 10; $i++) {
            Post::create([
                'caption' => $faker->text(60),
                'image' => $faker->imageUrl(1280,720),
                'announce' => $faker->text(100),
                'fulltext' => $faker->text(512)
            ]);
        }
    }
}
