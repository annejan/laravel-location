<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AuthenticateUser;
use Illuminate\Http\Request;

class AuthController extends Controller {

	public function login(AuthenticateUser $authenticateUser, Request $request) 
	{
               $authenticateUser->execute($request->has('code'));
	}

}
