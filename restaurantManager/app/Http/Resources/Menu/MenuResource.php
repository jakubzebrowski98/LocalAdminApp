<?php

namespace App\Http\Resources\Menu;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
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
            'MealId' => $this->MealId,
            'Name' => $this->Name,
            'Description' => $this->Description,
            'Price' => $this->Price,
            'Status' => $this->Status,
            'Category' => $this->Category,
            'CategoryName' => $this->CategoryName,
        ];
    }
}