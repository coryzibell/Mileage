<?php

use App\Distance;
use App\Location;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DistanceTableSeeder extends Seeder {
	
	public function run()
	{
		DB::table('distances')->delete();
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 1.3
		)); // Central Office -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 1.9
		)); // Central Office -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 1.7
		)); // Central Office -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 1.6
		)); // Central Office -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 1.2
		)); //  Central Office -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 1.4
		)); //  Central Office -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 1.5
		)); //  Central Office -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 2.8
		)); //  Central Office -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 2.2
		)); //  Central Office -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 1.5
		)); //  Central Office -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 0.8
		)); //  Central Office -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 0.9
		)); //  Central Office -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 0.3
		)); //  Central Office -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 2.1
		)); //  Central Office -> Maintenance
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 0.2
		)); //  Central Office -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 3.1
		)); //  Central Office -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 0.5
		)); //  Central Office -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 0.9
		)); //  Central Office -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Office')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 1.9
		)); //  Central Office -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 1.3
		)); // Maloney -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 3.2
		)); // Maloney -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 2.9
		)); // Maloney -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 1.9
		)); // Maloney -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 3.0
		)); // Maloney -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 2.6
		)); // Maloney -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 0.7
		)); // Maloney -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 4.5
		)); // Maloney -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 1.1
		)); // Maloney -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 2.4
		)); // Maloney -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 1.3
		)); // Maloney -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 0.6
		)); // Maloney -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 1.4
		)); // Maloney -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 3.0
		)); // Maloney -> Maintenance
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 1.2
		)); // Maloney -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 1.9
		)); // Maloney -> Venture Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 1.8
		)); // Maloney -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 2.2
		)); // Maloney -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maloney')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 2.1
		)); // Maloney -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 1.8
		)); // Platt -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 3.2
		)); // Platt -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 0.2
		)); // Platt -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 3.1
		)); // Platt -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 1.9
		)); // Platt -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 0.6
		)); // Platt -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 3.2
		)); // Platt -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 1.7
		)); // Platt -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 3.9
		)); // Platt -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 2.5
		)); // Platt -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 2.5
		)); // Platt -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 2.7
		)); // Platt -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 2.0
		)); // Platt -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 3.6
		)); // Platt -> Maintenance
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 2.0
		)); // Platt -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 4.7
		)); // Platt -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 1.5
		)); // Platt -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 1.5
		)); // Platt -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Platt')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 3.6
		)); // Platt -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 1.8
		)); // Lincoln -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 3.3
		)); // Lincoln -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 0.2
		)); // Lincoln -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 3.5
		)); // Lincoln -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 1.5
		)); // Lincoln -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 0.9
		)); // Lincoln -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 3.2
		)); // Lincoln -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 1.8
		)); // Lincoln -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 4.2
		)); // Lincoln -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 2.3
		)); // Lincoln -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 2.7
		)); // Lincoln -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 2.9
		)); // Lincoln -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 2.2
		)); // Lincoln -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 3.7
		)); // Lincoln -> Maintenance
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 2.2
		)); // Lincoln -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 5.0
		)); // Lincoln -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 1.7
		)); // Lincoln -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 1.7
		)); // Lincoln -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 3.8
		)); // Lincoln -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 1.6
		)); // Washington -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 1.9
		)); // Washington -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 3.2
		)); // Washington -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 3.5
		)); // Washington -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 2.1
		)); // Washington -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 3.1
		)); // Washington -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 1.2
		)); // Washington -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 4.1
		)); // Washington -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 3.1
		)); // Washington -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 2.6
		)); // Washington -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 1.8
		)); // Washington -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 1.6
		)); // Washington -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 1.2
		)); // Washington -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 1.4
		)); // Washington -> Maintenance
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 1.4
		)); // Washington -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 4.0
		)); // Washington -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 1.8
		)); // Washington -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 2.3
		)); // Washington -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Washington')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 0.3
		)); // Washington -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 1.2
		)); //  Barry -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 3.0
		)); // Barry -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 2.1
		)); // Barry -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 1.8
		)); // Barry -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 2.1
		)); // Barry -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 1.6
		)); // Barry -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 2.2
		)); // Barry -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 3.0
		)); // Barry -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 3.3
		)); // Barry -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 2.0
		)); // Barry -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 1.9
		)); // Barry -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 1.8
		)); // Barry -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 0.9
		)); // Barry -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 1.8
		)); // Barry -> Maintenance
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 1.2
		)); // Barry -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 4.1
		)); // Barry -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 0.7
		)); // Barry -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 1.2
		)); // Barry -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Barry')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 1.9
		)); // Barry -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 1.4
		)); //  Franklin -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 2.7
		)); // Franklin -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 0.6
		)); // Franklin -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 0.9
		)); // Franklin -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 3.1
		)); // Franklin -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 1.4
		)); // Franklin -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 2.9
		)); // Franklin -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 2.2
		)); // Franklin -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 3.6
		)); // Franklin -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 2.1
		)); // Franklin -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 2.3
		)); // Franklin -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 2.3
		)); // Franklin -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 1.6
		)); // Franklin -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 3.1
		)); // Franklin -> Maintenanence
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 1.6
		)); // Franklin -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 4.2
		)); // Franklin -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 1.2
		)); // Franklin -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 1.1
		)); // Franklin -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Franklin')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 3.1
		)); // Franklin -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 1.5
		)); //  Hale -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 0.7
		)); // Hale -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 3.3
		)); // Hale -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 3.2
		)); // Hale -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 1.2
		)); // Hale -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 2.3
		)); // Hale -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 2.8
		)); // Hale -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 4.1
		)); // Hale -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 1.9
		)); // Hale -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 2.4
		)); // Hale -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 1.5
		)); // Hale -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 0.9
		)); // Hale -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 1.5
		)); // Hale -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 4.5
		)); // Hale -> Maintenanence
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 1.4
		)); // Hale -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 4.0
		)); // Hale -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 2.0
		)); // Hale -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 2.4
		)); // Hale -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hale')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 1.5
		)); // Hale -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 2.7
		)); //  Hanover -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 4.0
		)); // Hanover -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 1.7
		)); // Hanover -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 1.8
		)); // Hanover -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 4.1
		)); // Hanover -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 3.0
		)); // Hanover -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 2.2
		)); // Hanover -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 4.1
		)); // Hanover -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 5.0
		)); // Hanover -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 2.1
		)); // Hanover -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 3.0
		)); // Hanover -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 3.8
		)); // Hanover -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 2.9
		)); // Hanover -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 4.3
		)); // Hanover -> Maintenanence
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 2.9
		)); // Hanover -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 5.7
		)); // Hanover -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 2.4
		)); // Hanover -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 2.4
		)); // Hanover -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hanover')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 2.0
		)); // Hanover -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 2.2
		)); //  Hooker -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 1.1
		)); // Hooker -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 4.0
		)); // Hooker -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 4.2
		)); // Hooker -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 3.1
		)); // Hooker -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 3.3
		)); // Hooker -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 3.6
		)); // Hooker -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 4.1
		)); // Hooker -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 5.0
		)); // Hooker -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 2.8
		)); // Hooker -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 2.0
		)); // Hooker -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 1.7
		)); // Hooker -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 2.4
		)); // Hooker -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 5.5
		)); // Hooker -> Maintenanence
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 0.9
		)); // Hooker -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 1.1
		)); // Hooker -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 2.7
		)); // Hooker -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 3.1
		)); // Hooker -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Hooker')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 4.8
		)); // Hooker -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 1.5
		)); //  Pulaski -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 2.2
		)); // Pulaski -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 2.5
		)); // Pulaski -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 2.3
		)); // Pulaski -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 2.6
		)); // Pulaski -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 2.0
		)); // Pulaski -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 2.1
		)); // Pulaski -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 2.4
		)); // Pulaski -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 2.1
		)); // Pulaski -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 2.8
		)); // Pulaski -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 1.1
		)); // Pulaski -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 1.9
		)); // Pulaski -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 1.4
		)); // Pulaski -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 3.1
		)); // Pulaski -> Maintenanence
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 1.2
		)); // Pulaski -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 2.7
		)); // Pulaski -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 1.4
		)); // Pulaski -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 1.4
		)); // Pulaski -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 2.7
		)); // Pulaski -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 0.8
		)); //  Putnam -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 1.4
		)); // Putnam -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 2.5
		)); // Putnam -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 2.4
		)); // Putnam -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 3.0
		)); // Putnam -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 2.1
		)); // Putnam -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 2.3
		)); // Putnam -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 1.6
		)); // Putnam -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 3.0
		)); // Putnam -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 2.0
		)); // Putnam -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 1.1
		)); // Putnam -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 1.0
		)); // Putnam -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 1.1
		)); // Putnam -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 2.7
		)); // Putnam -> Maintenanence
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 0.9
		)); // Putnam -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 2.2
		)); // Putnam -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 1.4
		)); // Putnam -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 1.2
		)); // Putnam -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Putnam')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 2.0
		)); // Putnam -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 0.9
		)); //  Sherman -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 0.6
		)); // Sherman -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 2.7
		)); // Sherman -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 3.0
		)); // Sherman -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 1.6
		)); // Sherman -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 2.1
		)); // Sherman -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 2.3
		)); // Sherman -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 0.9
		)); // Sherman -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 3.8
		)); // Sherman -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 1.7
		)); // Sherman -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 1.9
		)); // Sherman -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 1.0
		)); // Sherman -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 1.0
		)); // Sherman -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 2.6
		)); // Sherman -> Maintenanence
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 0.8
		)); // Sherman -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 1.7
		)); // Sherman -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 1.4
		)); // Sherman -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 1.8
		)); // Sherman -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Sherman')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 1.7
		)); // Sherman -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 0.3
		)); //  CCRC -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 1.4
		)); // CCRC -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 2.1
		)); // CCRC -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 2.2
		)); // CCRC -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 1.2
		)); // CCRC -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 1.4
		)); // CCRC -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 1.6
		)); // CCRC -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 1.5
		)); // CCRC -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 2.9
		)); // CCRC -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 2.4
		)); // CCRC -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 1.4
		)); // CCRC -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 1.1
		)); // CCRC -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 1.0
		)); // CCRC -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 1.7
		)); // CCRC -> Maintenanence
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 0.3
		)); // CCRC -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 3.2
		)); // CCRC -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 1.0
		)); // CCRC -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 1.1
		)); // CCRC -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'CCRC')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 1.4
		)); // CCRC -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 2.1
		)); //  Maintenance -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 3.0
		)); // Maintenance -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 3.6
		)); // Maintenance -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 3.7
		)); // Maintenance -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 1.4
		)); // Maintenance -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 2.0
		)); // Maintenance -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 3.1
		)); // Maintenance -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 4.5
		)); // Maintenance -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 4.4
		)); // Maintenance -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 5.5
		)); // Maintenance -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 3.1
		)); // Maintenance -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 2.7
		)); // Maintenance -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 2.6
		)); // Maintenance -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 1.7
		)); // Maintenance -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 1.9
		)); // Maintenance -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 7.0
		)); // Maintenance -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 2.6
		)); // Maintenance -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 2.6
		)); // Maintenance -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 1.0
		)); // Maintenance -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 0.2
		)); //  Central Registration -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 1.2
		)); // Central Registration -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 2.1
		)); // Central Registration -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 2.3
		)); // Central Registration -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 1.4
		)); // Central Registration -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 1.2
		)); // Central Registration -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 1.6
		)); // Central Registration -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 1.4
		)); // Central Registration -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 2.9
		)); // Central Registration -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 0.9
		)); // Central Registration -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 1.2
		)); // Central Registration -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 0.9
		)); // Central Registration -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 0.8
		)); // Central Registration -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 0.3
		)); // Central Registration -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 1.9
		)); // Central Registration -> Maintenance
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 3.0
		)); // Central Registration -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 1.0
		)); // Central Registration -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 1.2
		)); // Central Registration -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 1.7
		)); // Central Registration -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 0.2
		)); //  Venture -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 1.9
		)); // Venture -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 4.8
		)); // Venture -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 5.0
		)); // Venture -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 4.0
		)); // Venture -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 4.1
		)); // Venture -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 4.2
		)); // Venture -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 4.0
		)); // Venture -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 5.7
		)); // Venture -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 1.1
		)); // Venture -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 2.7
		)); // Venture -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 2.2
		)); // Venture -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 1.6
		)); // Venture -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 3.2
		)); // Venture -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 7.0
		)); // Venture -> Maintenance
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 3.0
		)); // Venture -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 3.8
		)); // Venture -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 3.9
		)); // Venture -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Venture')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 5.4
		)); // Venture -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 0.8
		)); //  YMCA -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 2.1
		)); // YMCA -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 1.4
		)); // YMCA -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 1.6
		)); // YMCA -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 1.8
		)); // YMCA -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 0.7
		)); // YMCA -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 0.9
		)); // YMCA -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 2.3
		)); // YMCA -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 2.3
		)); // YMCA -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 3.0
		)); // YMCA -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 1.7
		)); // YMCA -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 1.4
		)); // YMCA -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 1.7
		)); // YMCA -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 1.0
		)); // YMCA -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 2.1
		)); // YMCA -> Maintenance
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 0.7
		)); // YMCA -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 3.4
		)); // YMCA -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 0.5
		)); // YMCA -> Success Academy
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'YMCA')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 2.0
		)); // YMCA -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 0.3
		)); //  Success Academy -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 1.6
		)); // Success Academy -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 1.5
		)); // Success Academy -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 1.8
		)); // Success Academy -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 1.7
		)); // Success Academy -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 1.2
		)); // Success Academy -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 1.1
		)); // Success Academy -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 1.8
		)); // Success Academy -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 2.5
		)); // Success Academy -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 2.5
		)); // Success Academy -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 1.1
		)); // Success Academy -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 1.2
		)); // Success Academy -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 1.2
		)); // Success Academy -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 0.5
		)); // Success Academy -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 2.6
		)); // Success Academy -> Maintenance
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 0.6
		)); // Success Academy -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 3.3
		)); // Success Academy -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 0.2
		)); // Success Academy -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'to_location_id' => Location::where('name', 'Edison')->first()->id,
			'distance' => 2.0
		)); // Success Academy -> Edison
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Central Office')->first()->id,
			'distance' => 1.9
		)); //  Edison -> Central Office
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Maloney')->first()->id,
			'distance' => 2.1
		)); // Edison -> Maloney
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Platt')->first()->id,
			'distance' => 3.7
		)); // Edison -> Platt
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Lincoln')->first()->id,
			'distance' => 3.8
		)); // Edison -> Lincoln
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Washington')->first()->id,
			'distance' => 0.3
		)); // Edison -> Washington
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Barry')->first()->id,
			'distance' => 2.2
		)); // Edison -> Barry
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Franklin')->first()->id,
			'distance' => 2.9
		)); // Edison -> Franklin
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Hale')->first()->id,
			'distance' => 1.5
		)); // Edison -> Hale
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Hanover')->first()->id,
			'distance' => 2.0
		)); // Edison -> Hanover
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Hooker')->first()->id,
			'distance' => 4.8
		)); // Edison -> Hooker
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Pulaski')->first()->id,
			'distance' => 2.8
		)); // Edison -> Pulaski
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Putnam')->first()->id,
			'distance' => 2.0
		)); // Edison -> Putnam
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Sherman')->first()->id,
			'distance' => 1.9
		)); // Edison -> Sherman
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'CCRC')->first()->id,
			'distance' => 1.4
		)); // Edison -> CCRC
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Maintenance')->first()->id,
			'distance' => 1.0
		)); // Edison -> Maintenance
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Central Registration')->first()->id,
			'distance' => 1.7
		)); // Edison -> Central Registration
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Venture')->first()->id,
			'distance' => 5.4
		)); // Edison -> Venture
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'YMCA')->first()->id,
			'distance' => 1.9
		)); // Edison -> YMCA
		
		Distance::create(array(
			'from_location_id' => Location::where('name', 'Edison')->first()->id,
			'to_location_id' => Location::where('name', 'Success Academy')->first()->id,
			'distance' => 2.5
		)); // Edison -> Success Academy
	}
}