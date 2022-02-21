<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'UserId' => $this->UserId,
            'Address' => $this->Address,
            'PostalCode' => $this->PostalCode,
            'City' => $this->City,
            'PhoneNumber' => $this->PhoneNumber,
        ];
    }
}