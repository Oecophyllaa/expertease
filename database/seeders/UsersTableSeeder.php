<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$users = [
			[
				'name' => 'Oecophylla',
				'email' => 'oecophylla@site.dev',
				'password' => Hash::make('Master@123'),
				'remember_token' => NULL,
				'created_at' => date('Y-m-d h:i:s'),
				'updated_at' => date('Y-m-d h:i:s'),
			],
			[
				'name' => 'Insectivy',
				'email' => 'insectivy@site.dev',
				'password' => Hash::make('User@123'),
				'remember_token' => NULL,
				'created_at' => date('Y-m-d h:i:s'),
				'updated_at' => date('Y-m-d h:i:s'),
			],
		];

		User::insert($users);
	}
}
