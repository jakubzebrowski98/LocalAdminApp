<?php

use App\Http\Controllers\Api\Meals\MealsController;
use App\Http\Controllers\Api\Ingredients\ingredientsController;
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

Route::get('meals', [MealsController::class, 'getMeals']);
Route::apiResource('ingredients', App\Http\Controllers\Api\Ingredients\ingredientsController::class);
Route::post('login', [AuthController::class, 'login']);
Route::post('register',[AuthController::class, 'register']);
Route::post('forgot', [ForgotController::class, 'forgot']);
Route::post('reset', [ForgotController::class, 'reset']);
Route::get('user', [AuthController::class, 'user'])->middleware('auth:api');
Route::post('add/meal', [MealsController::class, 'store']);
Route::get('delete/meal/{MealId}', [MealsController::class, 'destroy']);
Route::post('update/meal/{MealId}', [MealsController::class, 'update']);