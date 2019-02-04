<?php

namespace App\Http\GraphQL\Mutations;

class CreateUser
{
	public function resolve($root, array $args)
	{
		return User::create([
			'name' => $args['name'],
			'password' => 222
		]);
	}
}