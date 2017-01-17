<?php
	use Illuminate\Database\Seeder;
	use App\Profile;
	class ProfileTableSeeder extends Seeder {
		public function run(){
			Profile::create([
				'user_id' => 1,
				'name' => 'Adedeji Olawale',
				'telephone' =>'0703 033 8205'
			]);
			Profile::create([
				'user_id' => 2,
				'name' => 'Adedeji Olawunmi',
				'telephone' => '0806 292 3424'
			]);
			Profile::create([
				'user_id' => 3,
				'name' => 'Adedeji Opeyemi',
				'telephone' => '0905 105 2414'
			]);
		}
	}