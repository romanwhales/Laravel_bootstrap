<?php
	use Illuminate\Database\Seeder;
	use App\Task;
	class TaskTableSeeder extends Seeder {
		public function run(){
			Task::create([
				'todolist_id' => 5,
				'name' => 'Walk the dog',
				'description' =>'Walk Barky the Mutt'
			]);
			Task::create([
				'todolist_id' => 5,
				'name' => 'Make tacos for dinner',
				'description' =>'Mexican sounds really yummy!'
			]);
		}
	}