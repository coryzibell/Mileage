<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('users')->delete();
		
		User::create(array(
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'name' => 'Admin'
        ));
	}
}