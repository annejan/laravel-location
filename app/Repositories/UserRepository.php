<?php namespace App\Repositories;

use App\User;

class UserRepository {

    public function findByNameOrCreate($userData) 
    {

        return User::firstOrCreate([
           // 'name' => $userData->nickname,
            'name' => $userData->name,
            'email' => $userData->email,
	    'password' => substr(md5(rand()), 0, 7) // bit lame
        ]);
    
    }
    
}
