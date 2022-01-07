<?php

namespace App\Http\Controllers\Api\Meals;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meals\Base\Meals;
use App\Http\Resources\MealsResource;
use Illuminate\Support\Facades\Validator;

class MealsController extends Controller
{
    public function getMeals(){
        return MealsResource::collection(Meals::get());
    }
    public function index()
    {
        return MealsResource::collection(Meals::all());
    }
    

  public function store(Request $request){
    $meal = new Meals;
    $meal->Name = $request->Name;
    $meal->Price = $request->Price;
    $meal->save();
  return response()->json([
      'status' => 'success'
  ]);
} 

    public function update(Request $request, $MealId)
    {
        $meal = Meals::find($MealId);
        $meal->Name = $request->Name;
        $meal->Price = $request->Price;
        $meal->save();
    }

    public function destroy($MealId)
    {
        $meal = Meals::find($MealId);
        $meal->delete();
        return response()->json('Meal successfully removed');
    }
    
}
