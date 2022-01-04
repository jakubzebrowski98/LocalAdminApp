<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Orders\Base\Orders;
use App\Http\Resources\OrdersResource;
use Illuminate\Support\Facades\Validator;

class OrdersController extends Controller
{
    public function getOrders(){
        return OrdersResource::collection(Orders::get());
    }
    public function index(){

        $orders = Orders::all();
        return response()->json([
        'orders' => $orders
    ]);
    }
    

    public function store(Request $request){
        $order = new Orders;
        $order->OrderNo = $request->OrderNo;
        $order->User = $request->User;
        $order->Phone = $request->Phone;
        $order->Name = $request->Name;
        $order->Address = $request->Address;
        $order->Postal = $request->Postal;
        $order->City = $request->City;
        $order->Details = $request->Details;
        $order->OrderPrice = $request->OrderPrice;
        $order->OrderDate = $request->OrderDate;
        $order->EndDate = $request->EndDate;
        $order->save();
        return response()->json([
        'status' => 'success'
    ]);
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
