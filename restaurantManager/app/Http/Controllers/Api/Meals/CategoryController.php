<?php

namespace App\Http\Controllers\Api\Meals;

use App\Http\Controllers\Controller;
use App\Http\Resources\MealsCategory;
use App\Models\Meals\Base\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return MealsCategory::collection(Category::all());
    }

    public function store(Request $request)
    {
        $Category = Category::create($request->all());

        return new MealsCategory($Category);
    }

    public function show($CategoryId)
    {
        return new MealsCategory(Category::findOrFail($CategoryId));
    }

    public function update(Request $request, $CategoryId)
    {
        $Category = Category::findOrFail($CategoryId);
        $Category->update($request->all());
    }


    public function destroy($CategoryId)
    {
        $Category = Category::findOrFail($CategoryId);
        if($Category->delete()){
            return response()->noContent();
        }
    }
}
