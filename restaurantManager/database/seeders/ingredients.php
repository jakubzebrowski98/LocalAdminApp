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
            'IngName' => 'Ryż',
            'Status' => '1',
        ],
        [
            'IngName' => 'Awokado',
            'Status' => '1',
        ],
        [
            'IngName' => 'Łosoś',
            'Status' => '1',
        ],
        [
            'IngName' => 'Kalmar',
            'Status' => '1',
        ],
        [
            'IngName' => 'Krewetka',
            'Status' => '1',
        ],
        [
            'IngName' => 'Por',
            'Status' => '1',
        ],
        [
            'IngName' => 'Grzyby shitake',
            'Status' => '1',
        ],
        [
            'IngName' => 'Ogórek',
            'Status' => '1',
        ],
        [
            'IngName' => 'Rzepa',
            'Status' => '1',
        ],
        [
            'IngName' => 'Chilli',
            'Status' => '1',
        ],
        [
            'IngName' => 'Papryka Jalapeño',
            'Status' => '1',
        ],
        [
            'IngName' => 'Majonez',
            'Status' => '1',
        ],
        [
            'IngName' => 'Tykwa',
            'Status' => '1',
        ],
        [
            'IngName' => 'Sezam',
            'Status' => '1',
        ],
        [
            'IngName' => 'Imbir',
            'Status' => '1',
        ],
        [
            'IngName' => 'Fasola Eda Mame',
            'Status' => '1',
        ],
    ]);
    }
}
