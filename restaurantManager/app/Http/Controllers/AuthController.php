<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        try{
        if (Auth::attempt($credentials)) {
            /** @var User $user */
            $user = Auth::user();
            $token = $user->createToken('app')->accessToken;

            return response()->json([
                'success' => true,
                'token' => $token,
                'user' => $user
            ], 200);
        }
    }catch (\Exception $exception){
        return response([
            'message' => $exception->getMessage()
        ], 400);
    }
        return response()->json(

            [
            'success' => false, 
            'error' => ["message" => 'Invalid email address and / or password.'] 
            ], 403
        );
    }
    public function user(){
        return Auth::user();
    }
    
    public function register(Request $request){
       $validator = Validator::make($request->all(),[
           'first_name' => ['required', 'string', 'max:255'],
           'last_name' => ['required', 'string', 'max:255'],
           'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           'password' => ['required', 'string', 'min:8'],
       ]);
       if($validator->fails()){
           return response()->json(['error' => $validator->errors()], 422);
       }
       $input = $request->all();
       $input['password'] = Hash::make($input['password']);
       $user = User::create($input);
       Auth::login($user);
       return response()->json(['success' => true], 200);
    }
}
