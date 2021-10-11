<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ingredients extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')
        ->insert([
        [
            'IngName' => 'Burger Wołowy',
            'Status' => '1',
        ],
        [
            'IngName' => 'Cebula',
            'Status' => '1',
        ],
        [
            'IngName' => 'Ser Cedar',
            'Status' => '1',
        ],
        [
            'IngName' => 'Ser Camembert',
            'Status' => '1',
        ],
        [
            'IngName' => 'Rukola',
            'Status' => '1',
        ],
        [
            'IngName' => 'Mix Sałat',
            'Status' => '1',
        ],
        [
            'IngName' => 'Sałata lodowa',
            'Status' => '1',
        ],
        [
            'IngName' => 'Ogórek',
            'Status' => '1',
        ],
        [
            'IngName' => 'Pomidor',
            'Status' => '1',
        ],
        [
            'IngName' => 'Cebula karmelizowana',
            'Status' => '1',
        ],
        [
            'IngName' => 'Korniszony',
            'Status' => '1',
        ],
        [
            'IngName' => 'Bułka piwna',
            'Status' => '1',
        ],
        [
            'IngName' => 'Bułka sezamowa',
            'Status' => '1',
        ],
        [
            'IngName' => 'Bułka domowa',
            'Status' => '1',
        ],
        [
            'IngName' => 'Frytki',
            'Status' => '1',
        ],
    ]);
    }
}
