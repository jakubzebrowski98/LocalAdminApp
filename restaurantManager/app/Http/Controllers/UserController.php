<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash; 
use App\Models\User; 

class UserController extends Controller
{
    public function register(Request $request)
    { 
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]); 

        $user->roles()->attach(1); 
        
        return response()->json(['message' => 'Registration Successful.'], 201);

    }

}
