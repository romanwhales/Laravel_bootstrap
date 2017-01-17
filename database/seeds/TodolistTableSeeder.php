<?php
	use Illuminate\Database\Seeder;
	use App\Todolist;
	class TodolistTableSeeder extends Seeder {
		public function run(){
			Todolist::create([
				'name' => 'Sun Juan Vacation',
				'description' => 'Things to do before we leave for Puerto Rico!'
			]);
			Todolist::create([
				'name' => 'Home Winterization',
				'description' => 'Winter is coming.'
			]);
			Todolist::create([
				'name' => 'Rental Maintenance',
				'description' => 'Cleanup and improvements for new tenants'
			]);
		}
	}