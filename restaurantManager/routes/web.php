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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->middleware(['auth'])->name('home');


Route::get('/{any}', function () {
    return view('home');
})->middleware('auth')
->where('any','.*');



