<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use UserService;

class UserController extends Controller
{
    protected $service;

    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

    public function index($id){
        try {
            $user = $this->service->getUserById($id);
            return Inertia::render('profile',['user' => $user]);
        } catch (\Exception $e) {
            return Inertia::render('Index')->with('error',__('Something Wrong Happened'));
            Log::error($e->getMessage());
        }
       
    }
}
