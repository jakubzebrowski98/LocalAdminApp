<?php

use App\Http\Controllers\Api\Ingredients\ingredientsController;
use App\Http\Controllers\Api\Meals\CategoryController;
use App\Http\Controllers\Api\Meals\MealsController;
use App\Http\Controllers\Api\Meals\MealsIngredientsController;
use App\Http\Controllers\Api\Menu\MenuController;
use App\Http\Controllers\Api\Orders\NewOrderController;
use App\Http\Controllers\Api\Orders\OrdersController;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\Addresses\AddressesController;
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

Route::apiResource('category', CategoryController::class);

Route::apiResource('users', UserController::class);

Route::get('mealsIngredients/{MealId}', [MealsIngredientsController::class, 'getThisMealsIng']);
Route::get('orders', [OrdersController::class, 'getOrders']);
Route::post('order', [OrdersController::class, 'store']);
Route::post('new-order', [NewOrderController::class, 'store']);
Route::post('mealsIngredients/store', [MealsIngredientsController::class, 'store']);
Route::delete('mealsIngredients/{MealIngId}/delete', [MealsIngredientsController::class, 'destroy']);
Route::get('menu', [MenuController::class, 'index']);
Route::get('menu/category/{id}', [MenuController::class, 'getMealsByCategory']);
Route::post('menu/add', [MenuController::class, 'addToMenu']);
Route::post('add/meal', [MealsController::class, 'store']);
Route::get('delete/meal/{MealId}', [MealsController::class, 'destroy']);
Route::post('update/meal/{MealId}', [MealsController::class, 'update']);
Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('forgot', [ForgotController::class, 'forgot']);
Route::post('reset', [ForgotController::class, 'reset']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [\App\Http\Controllers\AuthController::class, 'user']);
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
});
Route::post('update/address/{UserId}', [AddressesController::class, 'update']);
Route::get('address/{UserId}', [AddressesController::class, 'getAddressById']);

// Route::get('/users', function () {
//     return UserResource::collection(User::all());
// });