<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use App\Http\Resources\Order\OrdersResources;
use App\Http\Resources\Order\OrderStatusesResource;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Orders\Base\Orders;
use App\Models\Orders\Base\OrderMeals;
use App\Models\Orders\Base\OrderStatus;
use App\Models\Meals\Base\Meals;

class OrdersController extends Controller
{
    public function getOrders(){
        return OrdersResources::collection(Orders::orderBy('OrderId', 'desc')->get());
    }
    public function index(){

        $orders = Orders::all();
        return response()->json([
        'orders' => $orders
    ]);
    
    }
      public function getOrdersForUser($UserId){
        $orders = Orders::where('UserId', $UserId)->get();
        return OrdersResources::collection($orders);
    }

    public function store(Request $request){
        $lastOrder = Orders::whereDate('OrderDate', Carbon::today())->orderBy('OrderDate', 'DESC')->first();

        if($lastOrder !== null){
            $orderNo = $lastOrder->OrderNo + 1;
        }else{
            $orderNo = 1;
        }

        $result = true;

        $order = new Orders;
        $order->OrderNo = $orderNo;
        //1 = na miejscu 2 = na wynos 3 = zamówienia web 
        $order->OrderType = 3;
        $order->OrderPrice = $request->OrderPrice;
        $order->Status = 1;
        $order->OrderDate = now();
        $order->UserId = $request->UserId;
        $order->save();

        if($order->save()){
            $result = true;
        }else{
            return response()->json('error');
        }

        $meals = $request->meals;

        foreach ($meals as $meal){
            $OrderMeals = new OrderMeals();
            $OrderMeals->MealId = $meal['MealId'];
            $OrderMeals->OrderDate = $order->OrderDate;
            $OrderMeals->Status = 1;
            $OrderMeals->Quantity = $meal['Quantity'];
            $OrderMeals->OrderId = $order->OrderId;

            
            if($OrderMeals->save()){
                $result = true;
            }else{
                return response()->json($meals);
            }
        }

        if($result === true){
            return response()->json('success');
        }
    }

    public function update(Request $request, $OrderId)
    {   
        $order = Orders::findOrFail($OrderId);
        $order->fill($request->all());
        
        if($request->Status = 5){
            $order->EndDate = now();
        }else{
            $order->EndDate = null;
        }

        if($order->save()){
            return response()->json('success');
        }else{
            return response()->json('fail');
        }
    }

    public function destroy($OrderId)
    {
        $order = Orders::find($OrderId);
        $order->delete();
        return response()->json('Order successfully removed');
    }

    public function getPrepareOrder(){
        $orders = Orders::where('Status', '<=' ,3)->orderBy('OrderId')->get();
        return OrdersResources::collection($orders);
    }

    public function getToCollectOrder(){
        $orders = Orders::where('Status', '<=' ,3)->get();
        return OrdersResources::collection($orders);
    }
    public function statuses(){
        $statuses = OrderStatus::getArray();
        return response()->json($statuses);
    }

    public function getThisOrder($OrderId){
        $order = Orders::findOrFail($OrderId);
        return new OrdersResources($order);
    }
}
