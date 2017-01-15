<?php

use Illuminate\Database\Seeder;
use App\Models\Section;
use App\Models\Post;

class PostsSectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::find(1)->sections()->attach([1,2]);
        Post::find(2)->sections()->attach([2,3]);
        Post::find(3)->sections()->attach([3,4]);
        Post::find(4)->sections()->attach([4,1]);
    }
}
