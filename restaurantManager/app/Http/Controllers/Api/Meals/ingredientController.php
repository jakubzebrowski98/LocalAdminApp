<?php

namespace App\Http\Controllers\Api\Meals;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meals\Base\ingredients;
use App\Http\Resources\IngredientsResource;

class ingredientController extends Controller
{
    public function getIngredients(){
        return IngredientsResource::collection(ingredients::get());
    }
}
