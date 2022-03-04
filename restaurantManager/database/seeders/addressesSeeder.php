<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class addressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addresses = [
            [
                'UserId' => 1, 
                'Address' => "Klonowa 12",
                'PostalCode' => "20-222",
                'City' => "Opole",
                'PhoneNumber' => "123456789",
            ],
            [
                'UserId' => 3, 
                'Address' => "Lipowa 4",
                'PostalCode' => "11-111",
                'City' => "Rzeszów",
                'PhoneNumber' => "987654321",
            ],
            [
                'UserId' => 4, 
                'Address' => "Olejowa 1",
                'PostalCode' => "22-222",
                'City' => "Majów",
                'PhoneNumber' => "111222333",
            ],
            [
                'UserId' => 5, 
                'Address' => "Zagajnicza 7",
                'PostalCode' => "77-777",
                'City' => "Klonów",
                'PhoneNumber' => "888888888",
            ],
            [
                'UserId' => 6, 
                'Address' => "Uliczna 50",
                'PostalCode' => "55-555",
                'City' => "Chorzów",
                'PhoneNumber' => "543543543",
            ],
        ];
    
        DB::table('addresses')->insert($addresses);
    }
}