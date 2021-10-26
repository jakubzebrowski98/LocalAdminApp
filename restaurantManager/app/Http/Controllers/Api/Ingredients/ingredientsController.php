<?php

namespace App\Http\Controllers\Api\Ingredients;

use App\Http\Controllers\Controller;
use App\Http\Resources\IngredientsResource;
use App\Models\Meals\Base\ingredients;
use Illuminate\Http\Request;

class ingredientsController extends Controller
{

    public function index()
    {
        return IngredientsResource::collection(ingredients::all());
    }

    public function store(Request $request)
    {
        $ingredient = ingredients::create($request->all());

        return new IngredientsResource($ingredient);
    }

    public function show(ingredients $ingredient)
    {
        return new IngredientsResource($ingredient);
    }

    public function update(Request $request, ingredients $ingredient)
    {
        $ingredient->update($request->all());
    }


    public function destroy(ingredients $ingredient)
    {
        $ingredient->delete();

        return response()->noContent();
    }
}
