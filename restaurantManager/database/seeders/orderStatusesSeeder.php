<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class orderStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
                'Value' => "Created", 
                'Name' => "Oczekuje na akceptację",
            ],
            [
                'Value' => "InProgres", 
                'Name' => "W trakcie realizacji",
            ],
            [
                'Value' => "Done", 
                'Name' => "Gotowe do odbioru",
            ],
            [
                'Value' => "Delivering", 
                'Name' => "W drodze",
            ],
            [
                'Value' => "Closed", 
                'Name' => "Zrealizowano",
            ],
        ];
    
        DB::table('order_statuses')->insert($statuses);
    }
}
