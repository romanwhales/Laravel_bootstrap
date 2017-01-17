<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Todolist;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();
        //$this->call(UsersTableSeeder::class);
        //DB::table('todolists')->delete();
        $this->call('CategoryTableSeeder');
        Model::reguard();
    }
}
