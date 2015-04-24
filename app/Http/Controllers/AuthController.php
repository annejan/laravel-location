<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AuthenticateUser;
use Illuminate\Http\Request;

class AuthController extends Controller {

	public function login(AuthenticateUser $authenticateUser, Request $request) 
	{
             return $authenticateUser->execute($request->has('code'), $this);
	}

	public function userAuthenticated($user) 
	{
	   // header("Location: /locations");
	   // exit();
	    // the official one does not work for some reason.	
            return redirect('/locations');
	
	}
}
