<?php

namespace App\Http\Controllers\Api\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewOrderController extends Controller
{
    public function store(Request $request){
        return json_encode($request->all());
    } 
}
