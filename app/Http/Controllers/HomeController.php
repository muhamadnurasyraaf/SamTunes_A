<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $service;

    public function __construct(AuthService $authService)
    {
        $this->service = $authService;
    }


    public function index(){
        $authenticated = $this->service->checkAuth();
        return Inertia::render('Index',['authenticated' => $authenticated]);
    }


}
