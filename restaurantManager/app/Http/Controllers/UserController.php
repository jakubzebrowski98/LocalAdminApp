<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash; 
use App\Models\User; 

class UserController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::all());
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }
    public function store(Request $request)
    {
        $user = User::create($request->all());

        return new UserResource($user);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
    }


    public function destroy(User $user)
    {
        $user->delete();

        return response()->noContent();
    }

}
