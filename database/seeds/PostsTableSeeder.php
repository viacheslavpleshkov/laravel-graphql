<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Factory::create();
		for ($i = 1; $i < 30; $i++) {
			$post = new Post();
			$post->title = $faker->title;
			$post->url = "post$i";
			$post->images = 'post.png';
			$post->text = $faker->text;
			$post->category_id = $i;
			$post->user_id = $i;
			$post->status = 1;
			$post->save();
		}
    }
}
