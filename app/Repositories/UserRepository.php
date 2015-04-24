<?php namespace App\Repositories;

class UserRepository {

    public function findByNameOrCreate($userData) 
    {
        return User::firstOrCreate([
            'name' => $userData->nickname,
            'email' => $userData->email
        ]);
    
    }
    
}