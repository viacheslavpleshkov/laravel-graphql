<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Category;

class CategoriesTableSeeder extends Seeder
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
			$category = new Category();
			$category->title = $faker->title;
			$category->url = "category$i";
			$category->status = 1;
			$category->save();
		}
    }
}
