<?php
	use Illuminate\Database\Seeder;
	use App\User;
	class UserTableSeeder extends Seeder {
		public function run(){
			User::create([
				'name' => 'Adedeji Olawale',
				'email' => 'ssg315ass@yahoo.com',
				'password' =>'wale'
			]);
			User::create([
				'name' => 'Adedeji Olawunmi',
				'email' => 'wunmi@yahoo.com',
				'password' => 'wunmi'
			]);
			User::create([
				'name' => 'Adedeji Opeyemi',
				'email' => 'ope@yahoo.com',
				'password' => 'ope'
			]);
		}
	}