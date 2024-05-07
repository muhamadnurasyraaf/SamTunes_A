<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Inertia\Inertia;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $service;

    public function __construct(AuthService $authService)
    {
        $this->service = $authService;
    }

    public function index(){
        return $this->service->renderLoginForm();
    }

    public function create(){
        return $this->service->renderRegistrationForm();
    }

    public function login(Request $request){

        $user = $this->service->loginUser($request);
    }
}
