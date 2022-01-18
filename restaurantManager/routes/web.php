<?php

use App\Http\Controllers\Api\Ingredients\ingredientsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/restaurant-app/home', function () {
    return view('RestaurantApp.MainPage');
})->name('RestaurantApp');

Route::get('/{any}', function () {
    return view('home');
})->where('any','.*');



