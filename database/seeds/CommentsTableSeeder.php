<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Comment;
class CommentsTableSeeder extends Seeder
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
			$comment = new Comment();
			$comment->reply = $faker->text;
			$comment->post_id = $i;
			$comment->status = 1;
			$comment->save();
		}
    }
}
