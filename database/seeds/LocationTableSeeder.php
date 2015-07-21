<?php

use App\Location;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class LocationTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('locations')->delete();
		
		Location::create(array(
			'name' => 'Central Office',
			'address' => '22 Liberty Street',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06450',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Maloney',
			'address' => '121 Gravel Street',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06450',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Platt',
			'address' => '220 Coe Avenue',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06451',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Lincoln',
			'address' => '164 Centennial Avenue',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06451',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Washington',
			'address' => '1225 North Broad',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06450',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Barry',
			'address' => '124 Columbia Street',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06451',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Franklin',
			'address' => '426 West Main Street',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06451',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Hale',
			'address' => '277 Atkins Street Ext.',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06450',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Hanover',
			'address' => '208 Main Street',
			'city' => 'S. Meriden',
			'state' => 'Connecticut',
			'zip' => '06451',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Hooker',
			'address' => '70 Overlook Road',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06450',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Pulaski',
			'address' => '100 Clearview Avenue',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06450',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Putnam',
			'address' => '133 Parker Avenue',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06450',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Sherman',
			'address' => '64 North Pearl Street',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06450',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'CCRC',
			'address' => '191 Pratt Street',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06450',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Maintenance',
			'address' => '998 North Colony Road',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06450',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Central Registration',
			'address' => '165 Miller Street',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06450',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Venture',
			'address' => '883 Paddock Avenue',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06450',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'YMCA',
			'address' => '110 W Main Street',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06450',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Success Academy',
			'address' => '14 W Main Street',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06450',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
		
		Location::create(array(
			'name' => 'Edison',
			'address' => '1355 N Broad Street',
			'city' => 'Meriden',
			'state' => 'Connecticut',
			'zip' => '06450',
			'public' => TRUE,
			'user_id' => User::first()->id
		));
	}
}