<?php namespace App;

use Laravel\Socialite\Contracts\Factory as Socialite; 
use Illuminate\Contracts\Auth\Guard;
use App\Repositories\UserRepository;

class AuthenticateUser {

    private $users;
    private $socialite;
    private $auth;

    public function __construct(UserRepository $users, Socialite $socialite, Guard $auth) 
    {
        $this->users = $users;
        $this->socialite = $socialite;
        $this->auth = $auth;
    }
    
    public function execute($hasToken, $listener)
    {
        if (!$hasToken) {
            return $this->getToken();
        }
        
        $user = $this->users->findByNameOrCreate($this->getUser());
        
        $this->auth->login($user, true);
       
        return $listener->userAuthenticated($user);
    }
    
    public function getToken() 
    {
        return $this->socialite->driver('facebook')->redirect();
    }

    public function getUser()
    {
        return  $this->socialite->driver('facebook')->user();
    }
    
}
