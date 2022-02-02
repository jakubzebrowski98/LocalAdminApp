<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    // public function index(){
    //     //$users = User::get();
    //     //return $users;
    //     $users = DB::table('users')->get();
    //     return $users;
    //    }

    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);
        $role = $request->input('role');
        $user->roles()->attach($role); 
        
        return response()->json(['message' => 'Registration Successful.'], 201);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response([
                'message' => 'Wprowadzono błędne dane!'
            ], Response::HTTP_UNAUTHORIZED);
        }
        /** @var \App\Models\MyUserModel $user **/
        $user = Auth::user();

        $token = $user->createToken('token')->plainTextToken;

        $cookie = cookie('jwt', $token, 60 * 24); // 1 day

        return response([
            'success' => true,
            'token' => $token,
            'user' => $user,
            'role' => $user->roles()->get()
        ])->withCookie($cookie);
    }
 
    public function user()
    {
        return Auth::user();
    }

    public function logout()
    {
        $cookie = Cookie::forget('jwt');

        return response([
            'message' => 'Success'
        ])->withCookie($cookie);
    }

}