<?php

namespace App\Http\Controllers\Api\Addresses;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Http\Resources\AddressesResource;
use Illuminate\Http\Request;

class AddressesController extends Controller
{

    public function update(Request $request, $UserId)
    {
        $addresses = Address::updateOrCreate(
            ['UserId' => $UserId],
            ['Address' => $request->Address,
            'PostalCode' => $request->PostalCode,
            'City' => $request->City,
            'PhoneNumber' => $request->PhoneNumber]
        );
    }

    public function getAddressById($UserId)
    {
        $addresses = Address::where('UserId', $UserId)->get();
        return AddressesResource::collection($addresses);
    }
}