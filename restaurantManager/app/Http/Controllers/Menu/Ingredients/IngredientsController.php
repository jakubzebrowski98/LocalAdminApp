<?php

namespace App\Http\Controllers\Menu\Ingredients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IngredientsController extends Controller
{
    public function index(){
        return view('content.Menu.Ingredients.Ingredients');
    }
}
