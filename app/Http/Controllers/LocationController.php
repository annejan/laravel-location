<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Redirect;

class LocationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
                $locations = \App\Location::all();
		return view('locations.index', compact('locations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('locations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
                \App\Location::create( $input );
                return Redirect::route('locations.index')->with('message', 'Locations added');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param \App\Location  $location
	 * @return Response
	 */
	public function show(\App\Location $location)
	{
		return view('locations.show', compact('location'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param \App\Location  $location
	 * @return Response
	 */
	public function edit(\App\Location  $location)
	{
                return view('locations.show', compact('location'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \App\Location $location
	 * @return Response
	 */
	public function update(\App\Location  $location)
	{
		$input = array_except(Input::all(), '_method');
                $location->update($input);
                return Redirect::route('locations.show', $location->id)->with('message', 'Location updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param \App\Locations  $location
	 * @return Response
	 */
	public function destroy(\App\Location  $location)
	{
		$location->delete();
                return Redirect::route('locations.index')->with('message', 'Location deleted.');
	}

}
