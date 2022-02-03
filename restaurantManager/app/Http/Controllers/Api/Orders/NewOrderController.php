<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use App\Models\Orders\Base\OrderMeals;
use App\Models\Orders\Base\Orders;
use App\Models\Orders\Base\OrderStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewOrderController extends Controller
{
    public function store(Request $request){
        $lastOrder = Orders::whereDate('OrderDate', Carbon::today())->orderBy('OrderDate', 'DESC')->first();

        if($lastOrder !== null){
            $orderNo = $lastOrder->OrderNo + 1;
        }else{
            $orderNo = 1;
        }


        $result = true;
        $meals = $request->meals;

        $newOrder = new Orders();
        $newOrder->OrderNo = $orderNo;
        $newOrder->OrderType = $request->OrderType;
        $newOrder->OrderPrice = $request->price;
        $newOrder->Status = 1;
        $newOrder->OrderDate = now();
        $newOrder->UserId = 0;

        // if($newOrder->save()){
        //     $result = true;
        // }else{
        //     return response()->json('error');
        // }

        foreach ($meals as $meal){
            $newOrderMeals = new OrderMeals();
            $newOrderMeals->MealId = $meal['meal']['MealId'];
            $newOrderMeals->OrderDate = $newOrder->OrderDate;
            $newOrderMeals->Status = 1;
            $newOrderMeals->Quantity = $meal['quantity'];
            $newOrderMeals->OrderId = $newOrder->OrderId;

            
            // if($newOrderMeals->save()){
            //     $result = true;
            // }else{
            //     return response()->json('error');
            // }
        }

        if($result === true){
            return response()->json('success');
        }
    } 
}
