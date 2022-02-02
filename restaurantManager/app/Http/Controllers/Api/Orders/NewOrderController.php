<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use App\Models\Orders\Base\OrderMeals;
use App\Models\Orders\Base\Orders;
use Illuminate\Http\Request;

class NewOrderController extends Controller
{
    public function store(Request $request){
        $meals = $request->meals;

        $newOrder = new Orders();
        $newOrder->OrderNo = 1;
        $newOrder->OrderPrice = $request->price;
        $newOrder->Status = 1;
        $newOrder->OrderDate = now();
        $newOrder->UserId = 1;

        $newOrder->save();

        foreach ($meals as $meal){
            $newOrderMeals = new OrderMeals();

            $newOrderMeals->MealId = $meal['meal']['MealId'];
            $newOrderMeals->OrderDate = now();
            $newOrderMeals->Status = 1;
            $newOrderMeals->Quantity = $meal['quantity'];
            $newOrderMeals->OrderId = 1;

            $newOrderMeals->save();
        }
    } 
}
