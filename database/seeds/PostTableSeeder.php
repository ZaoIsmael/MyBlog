<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use MyBlog\Entities\Post;

class PostTableSeeder extends Seeder {

    public function run()
    {
        $this->createPost(10);
    }

    public function createPost($total)
    {
        $faker = Faker::create();

        for($x = 0; $x < $total; $x++){
            Post::create([
               'title'        => $faker->sentence()
                ,'description' => $faker->realText(400,3)
                ,'image'       => $faker->image()
            ]);
        }
    }
}