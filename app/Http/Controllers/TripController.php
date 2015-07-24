<?php

namespace App\Http\Controllers;

use App\Trip;
use App\Location;
use App\Distance;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use Validator;
use Input;
use Session;
use Redirect;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return \View::make('trips.create')->with('locations', Location::lists('name', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
            $rules = array(
	        'reason'	=>	'required',
	        'date'		=>	'required|date',
	        'from_location_id'		=>	'required|different:to_location_id',
	        'to_location_id'		=>	'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
	        return Redirect::to('trips/create')
	        	->withErrors($validator)
	        	->withInput(Input::all());
        }	else{
	        $trip = new Trip;
	        $trip->reason	= Input::get('reason');
	        $trip->date		= Input::get('date');
	        $trip->from_location_id	= Input::get('from_location_id');
	        $trip->to_location_id	= Input::get('to_location_id');
	        $trip->user_id	= Auth::id();
	        $distance = Distance::where('from_location_id', Input::get('from_location_id'))->where('to_location_id', Input::get('to_location_id'))->first();
	        $trip->distance = $distance->distance;
	        $trip->save();
	        
	        if (Input::has('round_trip'))
	        {
		    $trip = new Trip;
	        $trip->reason	= 'Return Trip';
	        $trip->date		= Input::get('date');
	        $trip->from_location_id	= Input::get('to_location_id');
	        $trip->to_location_id	= Input::get('from_location_id');
	        $trip->user_id	= Auth::id();
	        $distance = Distance::where('from_location_id', Input::get('to_location_id'))->where('to_location_id', Input::get('from_location_id'))->first();
	        $trip->distance = $distance->distance;
	        $trip->save();
	        }
	        Session::flash('message', 'Successfully added trip!');
	        return Redirect::to('trips');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
