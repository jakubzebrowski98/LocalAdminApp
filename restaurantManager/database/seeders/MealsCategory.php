<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealsCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meals_category')
            ->insert([[
                'Name' => 'Dania główne',
                'Stat' => '1'
            ],
            [
                'Name' => 'Przystawki',
                'Stat' => '1'
            ],
            [
                'Name' => 'Napoje',
                'Stat' => '1'
            ],
            [
                'Name' => 'Zupy',
                'Stat' => '1'
            ],
            [
                'Name' => 'Zestawy',
                'Stat' => '1'
            ],
            [
                'Name' => 'Desery',
                'Stat' => '1'
            ],
        ]);
    }
}
