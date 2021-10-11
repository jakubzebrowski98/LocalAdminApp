<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Meals extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meals')
            ->insert([[
                'Name' => 'Burger S',
                'Price' => '12',
                'Status' => '0',
            ],
            [
                'Name' => 'Burger M',
                'Price' => '15',
                'Status' => '0',
            ],
            [
                'Name' => 'Burger XL',
                'Price' => '20',
                'Status' => '0',
            ],
            [
                'Name' => 'Burger Hot',
                'Price' => '18',
                'Status' => '0',
            ],
        ]);
    }
}
