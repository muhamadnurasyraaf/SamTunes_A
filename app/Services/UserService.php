<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserService
{

   public function getUserById($id)
   {
        try {
            return User::findOrFail($id);
        } catch (ModelNotFoundException $e) {
           throw new \Exception("User not found",404);
        }
        
   }
}