<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostsTableSeeder::class);
        /*$faker = Faker\Factory::create();
        DB::table('posts')->insert([
            'caption' => $faker->text(60),
            'image' => $faker->imageUrl(1280,720),
            'announce' => $faker->text(100),
            'description' => $faker->text(1024)
        ]);*/
    }
}
