<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'John', 
        	'email' => 'jdoe@example.net', 
        	'password' => bcrypt('secret'),
        ]);
    }
}
