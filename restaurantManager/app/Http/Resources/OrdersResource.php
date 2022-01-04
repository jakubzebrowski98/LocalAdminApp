<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrdersResource extends JsonResource
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
            'Id' => $this->OrderId,
            'OrderNo' => $this->OrderNo,
            'User' => $this->User,
            'Phone' => $this->Phone,
            'Name' => $this->Name,
            'Address' => $this->Address,
            'Postal' => $this->Postal,
            'City' => $this->City,
            'Details' => $this->Details,
            'OrderPrice' => $this->OrderPrice,
            'Status' => $this->Status,
            'OrderDate' => $this->OrderDate,
            'EndDate' => $this->EndDate,
        ];
    }
}
