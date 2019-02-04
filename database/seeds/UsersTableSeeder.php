<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;
use App\User;
class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Factory::create();
		for ($i = 0; $i < 30; $i++) {
			$user = new User();
			$user->name = $faker->name;
			$user->email = $faker->email;
			$user->password = Hash::make($faker->password);
			$user->save();
		}
	}
}
