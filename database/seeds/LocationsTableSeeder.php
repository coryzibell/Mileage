<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class LocationsTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('locations')->delete();
		
		
	}
}