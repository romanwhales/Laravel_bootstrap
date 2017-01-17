<?php
	use Illuminate\Database\Seeder;
	use App\Category;
	class CategoryTableSeeder extends Seeder {
		public function run(){
			Category::create([
				'name' => 'Vacation'
			]);
			Category::create([
				'name' => 'Leisure'
			]);
			Category::create([
				'name' => 'Exercise'
			]);
		}
	}