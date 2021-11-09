<?php

namespace App\Http\Controllers\Api\Meals;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meals\Base\Meals;
use App\Http\Resources\MealsResource;

class MelasController extends Controller
{
    public function index()
    {
        return MealsResource::collection(Meals::all());
    }

    public function store(Request $request)
    {
        $meals = Meals::create($request->all());

        return new MealsResource($meals);
    }

    public function show(Meals $meals)
    {
        return new MealsResource($meals);
    }

    public function update(Request $request, Meals $meals)
    {
        $meals->update($request->all());
    }


    public function destroy(Meals $meals)
    {
        $meals->delete();

        return response()->noContent();
    }
}
