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
                'Category' => '1'
            ],
            [
                'Name' => 'Gyoza z krewetkami, chorizo i serkiem Philadelphia',
                'Price' => '24',
                'Status' => '1',
                'Description' => '',
                'Category' => '1'
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
                'Name' => 'KUGATSU I',
                'Price' => '89',
                'Status' => '1',
                'Description' => '36 SZTUK: 6x Hoso maki ogórek, sezam, 6x, Futo maki krewetka, majonez, por, 6x Futo maki pieczony łosoś, majonez, ogórek, słodki sos, 6x California maki łosoś, serek, awokado, 6x Futo maki wege ogórek, rzepa, tykwa, por, 6x Futo maki kalmar w tempurze, majonez, ogórek, kampyo, rzepa',
                'Category' => '5'
            ],
            [
                'Name' => 'TORI II',
                'Price' => '89',
                'Status' => '1',
                'Description' => '36 SZTUK: 6x Hoso maki rzepa, 6x California maki łosoś, serek, awokado, 6x Futo maki łosoś, tykwa, serek, tamago, ogórek, słodki sos, 6x Futo maki krewetka w tempurze, majonez, por, chilli, 6x Futo maki maślana w panco, ogórek, rzepa, sos śliwkowy, 6x Futo maki wege ogórek, rzepa, tykwa, por',
                'Category' => '5'
            ],
            [
                'Name' => 'KUGATSU II',
                'Price' => '130',
                'Status' => '1',
                'Description' => '48 SZTUK: 6x Nigiri łosoś, majonez, por, 6x Nigiri tuńczyk, chilli, por, 6x Futo maki tuńczyk, rzepa, ogórek, por, majonez, sos chilli, 6x Futo maki łosoś, serek, awokado, 6x Futo maki krewetka w tempurze, por, majonez, 6x Futo maki wege ogórek, rzepa, tykwa, por, serek, 6x Futo maki kalmar w tempurze, majonez, rzepa, ogórek, kampyo, 6x Futo maki pieczona skóra z łososia, majonez, awokado, tykwa, słodki sos',
                'Category' => '5'
            ],
            [
                'Name' => 'TORI III',
                'Price' => '130',
                'Status' => '1',
                'Description' => '48 SZTUK: 6x Futo maki kalmar w tempurze, majonez, grzyby shitake, ogórek, 6x Futo maki krewetka w tempurze, majonez, por, chilli, 6x Futo maki tatar z łososia, ogórek (całość w tempurze), 6x Futo maki tuńczyk w tempurze, majonez, por, rzepa, ogórek, chilli, 6x Futo maki łosoś w panko, majonez, papryczki jalapeño, 6x Futo maki maślana w panko, ogórek, rzepa, sos śliwkowy, 6x 
                Futo maki pieczona skóra z łososia, majonez, awokado, tykwa, słodki sos, sezam',
                'Category' => '5'
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
