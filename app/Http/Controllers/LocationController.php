<?php

namespace App\Http\Controllers;

use App\Location;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;
use Input;
use Session;
use Redirect;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // return all active public locations and actve private locations based on authenticated user id
        $locations = Location::where('public', TRUE)->orWhere('user_id', Auth::id())->where('active', TRUE)->get();
        // $locations = Location::all();
        return \View::make('locations.index')
        	->with('locations', $locations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return \View::make('locations.create');
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
	        'name'		=>	'required',
	        'address'	=>	'required',
	        'city'		=>	'required',
	        'state'		=>	'required',
	        'zip'		=>	'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
	        return Redirect::to('locations/create')
	        	->withErrors($validator)
	        	->withInput(Input::all());
        }	else{
	        $location = new Location;
	        $location->name		= Input::get('name');
	        $location->address	= Input::get('address');
	        $location->city		= Input::get('city');
	        $location->state	= Input::get('state');
	        $location->zip		= Input::get('zip');
	        $location->public	= FALSE;
	        $location->user_id	= Auth::id();
	        $location->save();
	        
	        Session::flash('message', 'Successfully added location!');
	        return Redirect::to('locations');
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
        $location = Location::find($id);
        return \View::make('locations.show')
        	->with('location', $location);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $location = Location::find($id);
        
        return \View::make('locations.edit')
        	->with('location', $location);
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
        $rules = array(
	        'name'		=>	'required',
	        'address'	=>	'required',
	        'city'		=>	'required',
	        'state'		=>	'required',
	        'zip'		=>	'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails()) {
	        return Redirect::to('locations' . $id . '/edit')
	        	->withErrors($validator)
	        	->withInput(Input::all());
        }	else{
	        $location = Location::find($id);
	        $location->name		= Input::get('name');
	        $location->address	= Input::get('address');
	        $location->city		= Input::get('city');
	        $location->state	= Input::get('state');
	        $location->zip		= Input::get('zip');
	        $location->user_id	= Auth::id();
	        $location->save();
	        
	        Session::flash('message', 'Successfully updated location!');
	        return Redirect::to('locations');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $location = Location::find($id);
        $location->active = FALSE;
        $location->save();

        // redirect
        Session::flash('message', 'Successfully deleted the location!');
        return Redirect::to('locations');
    }
}
