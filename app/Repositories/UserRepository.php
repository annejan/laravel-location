<?php namespace App\Repositories;

use App\User;

class UserRepository {

    public function findByNameOrCreate($userData) 
    {
	$user = User::where('email', '=', $userData->email)->first();
        if(!$user) {
            $user = User::create([	
        	// 'name' => $userData->nickname,
          	'name' => $userData->name,
           	'email' => $userData->email,
	    	'password' => substr( md5(rand()), 0, 7) // bit lame should make nullable instead probably
    	    ]);
	}
	return $user;
    
    }
    
}
