<?php

use App\Http\Controllers\Api\Ingredients\ingredientsController;
use App\Http\Controllers\Api\Meals\MealsIngredientsController;
use App\Http\Controllers\Api\Meals\MelasController;
use App\Http\Controllers\Api\Menu\MenuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
    
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('ingredients', ingredientsController::class);

Route::apiResource('meals', MelasController::class);

Route::get('mealsIngredients/{MealId}', [MealsIngredientsController::class, 'getThisMealsIng']);
Route::post('mealsIngredients/store', [MealsIngredientsController::class, 'store']);
Route::delete('mealsIngredients/{MealIngId}/delete', [MealsIngredientsController::class, 'destroy']);

Route::get('menu', [MenuController::class, 'index']);
Route::post('menu/add', [MenuController::class, 'addToMenu']);

Route::post('login', [AuthController::class, 'login']);
Route::post('register',[AuthController::class, 'register']);
Route::post('forgot', [ForgotController::class, 'forgot']);
Route::post('reset', [ForgotController::class, 'reset']);
Route::get('user', [AuthController::class, 'user'])->middleware('auth:api');
