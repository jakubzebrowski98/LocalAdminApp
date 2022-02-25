<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use App\Http\Resources\Order\OrdersResources;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Orders\Base\Orders;
use App\Models\Orders\Base\OrderMeals;
use App\Models\Orders\Base\OrderStatus;
use App\Http\Resources\OrdersResource;
use Illuminate\Support\Facades\Validator;
use App\Models\Meals\Base\Meals;
use App\Http\Resources\MealsResource;

class OrdersController extends Controller
{
    public function getOrders(){
        return OrdersResources::collection(Orders::get());
    }
    public function index(){

        $orders = Orders::all();
        return response()->json([
        'orders' => $orders
    ]);
    }
      public function getOrdersForUser(Request $request){
          $orders = Orders::where('UserId', $request->UserId)->get();
          //$meals = Meals::where('MealId', 1)->get();

          foreach ($orders as $order){
                $OrderMeals[] = OrderMeals::where('OrderId', $order['OrderId'])->get();

                foreach($OrderMeals as $ordermeal[]){
                    $orderList[] = Meals::where('MealId', 1)->get();
                }
          }
          return $orderList;
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
        $order = Orders::find($OrderId);
        $order->Status = $request->Status;
        $order->EndDate = $request->EndDate;
        $order->save();
    }

    public function destroy($OrderId)
    {
        $order = Orders::find($OrderId);
        $order->delete();
        return response()->json('Order successfully removed');
    }
    
}
