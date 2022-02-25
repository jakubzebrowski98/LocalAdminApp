<?php

namespace App\Http\Controllers\Api\Menu;

use App\Http\Controllers\Controller;
use App\Http\Resources\Menu\MenuResource;
use App\Models\Meals\Base\Meals;
use App\Models\Menu\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return MenuResource::collection(Menu::all());
    }

    public function addToMenu(Request $request){
        $result = true;
        
        foreach($request->toAdd as $key => $id){
            if($id !== null){
                $meals = Meals::findOrFail($key);
                $meals->Status = Meals::ACTIVE;

                if($meals->save()){
                    $result = true;
                }else{
                    $result = false;
                }
            }
        }
        if($result === true){
            return response()->noContent();
        }
    }

    public function getMealsByCategory($id)
    {
        $meals = Meals::where('Category', $id)->get();


        return MenuResource::collection($meals);
    }
}