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
                'Name' => 'Eda mame z solą',
                'Price' => '12',
                'Status' => '1',
                'Description' => '',
                'Category' => '2'
            ],
            [
                'Name' => 'Gyoza z kaczką, kimchi i kolendrą',
                'Price' => '24',
                'Status' => '1',
                'Description' => '',
                'Category' => '2'
            ],
            [
                'Name' => 'Gyoza z krewetkami, chorizo i serkiem Philadelphia',
                'Price' => '24',
                'Status' => '1',
                'Description' => '',
                'Category' => '2'
            ],
            [
                'Name' => 'Warzywa w tempurze',
                'Price' => '21',
                'Status' => '1',
                'Description' => '',
                'Category' => '2'
            ],
            [
                'Name' => 'Miso',
                'Price' => '15',
                'Status' => '1',
                'Description' => 'Zupa z pasty sojowej z serem tofu',
                'Category' => '4'
            ],
            [
                'Name' => 'Tom yum',
                'Price' => '23',
                'Status' => '1',
                'Description' => 'Zupa słodko-ostra z kurczakiem lub krewetkami',
                'Category' => '4'
            ],
            [
                'Name' => 'Shrimp soup',
                'Price' => '23',
                'Status' => '1',
                'Description' => 'Zupa krewetkowa z pieprzem cytrynowym',
                'Category' => '4'
            ],
            [
                'Name' => 'Ramen',
                'Price' => '29',
                'Status' => '1',
                'Description' => 'Gęsty kremowy bulion, mieszanka japońskich past miso, sezamu i ostrego chilli',
                'Category' => '4'
            ],
            [
                'Name' => 'Aloes',
                'Price' => '8',
                'Status' => '1',
                'Description' => '',
                'Category' => '3'
            ],
            [
                'Name' => 'Coca-cola',
                'Price' => '8',
                'Status' => '1',
                'Description' => '',
                'Category' => '3'
            ],
            [
                'Name' => 'Fanta',
                'Price' => '8',
                'Status' => '1',
                'Description' => '',
                'Category' => '3'
            ],
            [
                'Name' => 'Sprite',
                'Price' => '8',
                'Status' => '1',
                'Description' => '',
                'Category' => '3'
            ],
            [
                'Name' => 'Sernik miso',
                'Price' => '23',
                'Status' => '1',
                'Description' => '',
                'Category' => '6'
            ],
            [
                'Name' => 'Lody z owocami sezonowymi',
                'Price' => '18',
                'Status' => '1',
                'Description' => '',
                'Category' => '6'
            ],
        ]);
    }
}
