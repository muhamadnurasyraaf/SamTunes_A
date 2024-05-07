<?php

namespace App\Services;

use Inertia\Inertia;

class AuthService
{
    public function renderLoginForm(){
        return Inertia::render('login');
    }

    public function renderRegistrationForm(){
        return Inertia::render('register');
    }

    public function checkAuth(){
        return auth()->check();
    }

    public function loginUser($data){

    }

    public function createUser($data){

    }
}