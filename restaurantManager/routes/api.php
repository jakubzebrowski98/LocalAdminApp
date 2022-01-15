<?php

use App\Http\Controllers\Api\Ingredients\ingredientsController;
use App\Http\Controllers\Api\Meals\MealsIngredientsController;
use App\Http\Controllers\Api\Meals\MealsController;
use App\Http\Controllers\Api\Orders\OrdersController;
use App\Http\Controllers\Api\Menu\MenuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use League\OAuth2\Server\Entities\AuthCodeEntityInterface;

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
    
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('ingredients', ingredientsController::class);

Route::apiResource('meals', MealsController::class);
Route::get('orders', [OrdersController::class, 'getOrders']);
Route::post('order', [OrdersController::class, 'store']);
Route::get('mealsIngredients/{MealId}', [MealsIngredientsController::class, 'getThisMealsIng']);
Route::post('mealsIngredients/store', [MealsIngredientsController::class, 'store']);
Route::delete('mealsIngredients/{MealIngId}/delete', [MealsIngredientsController::class, 'destroy']);

Route::get('menu', [MenuController::class, 'index']);
Route::post('menu/add', [MenuController::class, 'addToMenu']);

Route::post('add/meal', [MealsController::class, 'store']);
Route::get('delete/meal/{MealId}', [MealsController::class, 'destroy']);
Route::post('update/meal/{MealId}', [MealsController::class, 'update']);

Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [\App\Http\Controllers\AuthController::class, 'user']);
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
});