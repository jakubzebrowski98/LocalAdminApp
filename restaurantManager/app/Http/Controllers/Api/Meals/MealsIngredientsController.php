<?php

namespace App\Http\Controllers\Api\Meals;

use App\Http\Controllers\Controller;
use App\Http\Resources\MealsIngredientsResource;
use App\Http\Resources\MealsIngredientsVResource;
use App\Models\Meals\Base\MealsIngredients;
use App\Models\Meals\Base\MealsIngredientsV;
use Illuminate\Http\Request;

class MealsIngredientsController extends Controller
{
    public function getThisMealsIng($MealId)
    {
        return MealsIngredientsVResource::collection(MealsIngredientsV::where('MealId', $MealId)->get());
    }

    public function store(Request $request)
    {
        $mealIng = MealsIngredients::create($request->all());

        return new MealsIngredientsVResource($mealIng);
    }

    public function show($MealIngId)
    {
        return new MealsIngredientsVResource(MealsIngredients::findOrFail($MealIngId));
    }

    public function update(Request $request, $MealIngId)
    {
        $mealsIngredients = MealsIngredients::findOrFail($MealIngId);
        $mealsIngredients->update($request->all());
    }


    public function destroy($MealIngId)
    {
        $mealsIngredients = MealsIngredients::findOrFail($MealIngId);
        if($mealsIngredients->delete()){
            return response()->noContent();
        }
    }
}
