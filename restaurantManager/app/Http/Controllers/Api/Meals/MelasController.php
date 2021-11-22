<?php

namespace App\Http\Controllers\Api\Meals;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meals\Base\Meals;
use App\Http\Resources\MealsResource;

class MelasController extends Controller
{
    public function getMeals(){
        return MealsResource::collection(Meals::get());
    }
}
