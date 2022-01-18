<?php
namespace App\Http\Controllers\Api\Meals;


use App\Http\Controllers\Controller;
use App\Http\Resources\MealsResource;
use App\Models\Meals\Base\Meals;
use Illuminate\Http\Request;

class MealsController extends Controller
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

    public function show($MealId)
    {
        return new MealsResource(Meals::findOrFail($MealId));
    }

    public function update(Request $request, $MealId)
    {
        $meals = Meals::findOrFail($MealId);
        $meals->update($request->all());
    }


    public function destroy($MealId)
    {
        $meals = Meals::findOrFail($MealId);
        if($meals->delete()){
            return response()->noContent();
        }
    }
}