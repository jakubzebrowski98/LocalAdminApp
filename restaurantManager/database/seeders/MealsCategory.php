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
            ],
            [
                'Name' => 'Przystawki',
            ],
            [
                'Name' => 'Napoje',
            ],
        ]);
    }
}
