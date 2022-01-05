<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MealsIngredientsVResource extends JsonResource
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
            'MealIngId' => $this->MealIngId,
            'MealId' => $this->MealId,
            'Name' => $this->Name,
            'IngId' => $this->IngId,
            'IngName' => $this->IngName,
            'Status' => $this->Status,
        ];
    }
}
