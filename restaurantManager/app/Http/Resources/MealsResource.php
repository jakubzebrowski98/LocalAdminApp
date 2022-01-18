<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MealsResource extends JsonResource
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
            'StatusName' => $this->StatusName,
            'Category' => $this->Category,
            'CategoryName' => $this->CategoryName,
        ];
    }
}
