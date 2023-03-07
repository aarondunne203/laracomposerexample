<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		// \App\Models\User::factory(10)->create();

		User::factory()->create([
			'name' => 'Aaron Dunne',
			'email' => 'aarondunne203@gmail.com',
			'password' => 'password',
			'is_admin' => true
		]);

		User::factory()->create([
			'name' => 'Aaron TEST',
			'email' => 'aarondunne123@gmail.com',
			'password' => 'password'
		]);

		Listing::factory(20)
			->create([
				'by_user_id' => 1
			]);

		Listing::factory(20)
			->create([
				'by_user_id' => 2
			]);
	}
}
