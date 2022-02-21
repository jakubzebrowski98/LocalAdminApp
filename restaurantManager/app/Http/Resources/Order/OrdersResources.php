<?php

namespace App\Http\Resources\Order;

use Illuminate\Http\Resources\Json\JsonResource;

class OrdersResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'OrderNo' => $this->OrderNo,
            'OrderPrice' => $this->OrderPrice,
            'Status' => $this->Status,
            'OrderType' => $this->OrderType,
            'OrderTypeName' => $this->OrderTypeName,
            'StatusName' => $this->StatusName,
            'OrderDate' => $this->OrderDate,
            'EndDate' => $this->EndDate,
            'UserId' => $this->UserId,
        ];
    }
}
