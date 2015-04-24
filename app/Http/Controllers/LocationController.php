<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
	 * @param  Locations  $location
	 * @return Response
	 */
	public function update(Locations  $location)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Locations  $location
	 * @return Response
	 */
	public function destroy(Locations  $location)
	{
		//
	}

}
