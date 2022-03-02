<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ordersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [
            //zamówienia web
            [
                'OrderNo' => 1,
                'OrderPrice' => 164,
                'OrderType' => 3,
                'Status' => 1,
                'OrderDate' => "2022-02-11 02:23:40",
                'EndDate' => null,
                'UserId' => 1,
            ], 
            [
                'OrderNo' => 2,
                'OrderPrice' => 80,
                'OrderType' => 3,
                'Status' => 1,
                'OrderDate' => "2022-02-11 02:23:40",
                'EndDate' => null,
                'UserId' => 2,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 12,
                'OrderType' => 3,
                'Status' => 2,
                'OrderDate' => "2022-02-09 01:23:40",
                'EndDate' => null,
                'UserId' => 1,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 80,
                'OrderType' => 3,
                'Status' => 2,
                'OrderDate' => "2022-02-01 22:23:40",
                'EndDate' => null,
                'UserId' => 1,
            ],
            [
                'OrderNo' => 2,
                'OrderPrice' => 164,
                'OrderType' => 3,
                'Status' => 2,
                'OrderDate' => "2022-02-01 22:20:10",
                'EndDate' => null,
                'UserId' => 2,
            ], 
            [
                'OrderNo' => 3,
                'OrderPrice' => 40,
                'OrderType' => 3,
                'Status' => 2,
                'OrderDate' => "2022-02-01 23:03:40",
                'EndDate' => null,
                'UserId' => 1,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 164,
                'OrderType' => 3,
                'Status' => 5,
                'OrderDate' => "2022-02-11 02:23:40",
                'EndDate' => "2022-02-11 03:23:40",
                'UserId' => 2,
            ], 
            [
                'OrderNo' => 2,
                'OrderPrice' => 80,
                'OrderType' => 3,
                'Status' => 4,
                'OrderDate' => "2022-02-11 03:23:40",
                'EndDate' => null,
                'UserId' => 1,
            ],
            [
                'OrderNo' => 3,
                'OrderPrice' => 12,
                'OrderType' => 3,
                'Status' => 5,
                'OrderDate' => "2022-02-11 03:26:40",
                'EndDate' => "2022-02-11 04:26:40",
                'UserId' => 2,
            ], 
            [
                'OrderNo' => 1,
                'OrderPrice' => 40,
                'OrderType' => 3,
                'Status' => 4,
                'OrderDate' => "2022-02-12 12:23:40",
                'EndDate' => null,
                'UserId' => 1,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 16,
                'OrderType' => 3,
                'Status' => 2,
                'OrderDate' => "2022-01-11 12:23:40",
                'EndDate' => null,
                'UserId' => 2,
            ], 
            [
                'OrderNo' => 2,
                'OrderPrice' => 80,
                'OrderType' => 3,
                'Status' => 4,
                'OrderDate' => "2022-01-11 03:23:40",
                'EndDate' => null,
                'UserId' => 1,
            ],
            [
                'OrderNo' => 3,
                'OrderPrice' => 12,
                'OrderType' => 3,
                'Status' => 5,
                'OrderDate' => "2022-01-11 03:26:40",
                'EndDate' => "2022-01-11 04:26:40",
                'UserId' => 2,
            ], 
            [
                'OrderNo' => 1,
                'OrderPrice' => 40,
                'OrderType' => 3,
                'Status' => 5,
                'OrderDate' => "2022-01-12 12:23:40",
                'EndDate' => "2022-01-12 13:23:40",
                'UserId' => 1,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 164,
                'OrderType' => 3,
                'Status' => 2,
                'OrderDate' => "2022-03-01 02:23:40",
                'EndDate' => null,
                'UserId' => 2,
            ], 
            [
                'OrderNo' => 2,
                'OrderPrice' => 80,
                'OrderType' => 3,
                'Status' => 5,
                'OrderDate' => "2022-03-01 03:23:40",
                'EndDate' => "2022-03-01 04:23:40",
                'UserId' => 1,
            ],
            [
                'OrderNo' => 3,
                'OrderPrice' => 12,
                'OrderType' => 3,
                'Status' => 2,
                'OrderDate' => "2022-03-02 03:26:40",
                'EndDate' => null,
                'UserId' => 2,
            ], 
            [
                'OrderNo' => 1,
                'OrderPrice' => 40,
                'OrderType' => 3,
                'Status' => 4,
                'OrderDate' => "2022-03-02 12:23:40",
                'EndDate' => null,
                'UserId' => 1,
            ],
            //lokal - na miejscu
            [
                'OrderNo' => 1,
                'OrderPrice' => 164,
                'OrderType' => 1,
                'Status' => 1,
                'OrderDate' => "2022-02-11 02:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ], 
            [
                'OrderNo' => 2,
                'OrderPrice' => 80,
                'OrderType' => 1,
                'Status' => 3,
                'OrderDate' => "2022-02-11 02:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 12,
                'OrderType' => 1,
                'Status' => 2,
                'OrderDate' => "2022-02-09 01:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 80,
                'OrderType' => 1,
                'Status' => 3,
                'OrderDate' => "2022-02-01 22:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ],
            [
                'OrderNo' => 2,
                'OrderPrice' => 164,
                'OrderType' => 1,
                'Status' => 2,
                'OrderDate' => "2022-02-01 22:20:10",
                'EndDate' => null,
                'UserId' => 0,
            ], 
            [
                'OrderNo' => 3,
                'OrderPrice' => 40,
                'OrderType' => 1,
                'Status' => 3,
                'OrderDate' => "2022-02-01 23:03:40",
                'EndDate' => null,
                'UserId' => 0,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 164,
                'OrderType' => 1,
                'Status' => 5,
                'OrderDate' => "2022-02-11 02:23:40",
                'EndDate' => "2022-02-11 03:23:40",
                'UserId' => 0,
            ], 
            [
                'OrderNo' => 2,
                'OrderPrice' => 80,
                'OrderType' => 1,
                'Status' => 4,
                'OrderDate' => "2022-02-11 03:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ],
            [
                'OrderNo' => 3,
                'OrderPrice' => 12,
                'OrderType' => 1,
                'Status' => 5,
                'OrderDate' => "2022-02-11 03:26:40",
                'EndDate' => "2022-02-11 04:26:40",
                'UserId' => 0,
            ], 
            [
                'OrderNo' => 1,
                'OrderPrice' => 40,
                'OrderType' => 1,
                'Status' => 3,
                'OrderDate' => "2022-02-12 12:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 16,
                'OrderType' => 1,
                'Status' => 2,
                'OrderDate' => "2022-01-11 12:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ], 
            [
                'OrderNo' => 2,
                'OrderPrice' => 80,
                'OrderType' => 1,
                'Status' => 4,
                'OrderDate' => "2022-01-11 03:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ],
            [
                'OrderNo' => 3,
                'OrderPrice' => 12,
                'OrderType' => 1,
                'Status' => 5,
                'OrderDate' => "2022-01-11 03:26:40",
                'EndDate' => "2022-01-11 04:26:40",
                'UserId' => 0,
            ], 
            [
                'OrderNo' => 1,
                'OrderPrice' => 40,
                'OrderType' => 1,
                'Status' => 5,
                'OrderDate' => "2022-01-12 12:23:40",
                'EndDate' => "2022-01-12 13:23:40",
                'UserId' => 0,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 164,
                'OrderType' => 1,
                'Status' => 2,
                'OrderDate' => "2022-03-01 02:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ], 
            [
                'OrderNo' => 2,
                'OrderPrice' => 80,
                'OrderType' => 1,
                'Status' => 5,
                'OrderDate' => "2022-03-01 03:23:40",
                'EndDate' => "2022-03-01 04:23:40",
                'UserId' => 0,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 12,
                'OrderType' => 1,
                'Status' => 3,
                'OrderDate' => "2022-03-02 03:26:40",
                'EndDate' => null,
                'UserId' => 0,
            ], 
            [
                'OrderNo' => 2,
                'OrderPrice' => 40,
                'OrderType' => 1,
                'Status' => 3,
                'OrderDate' => "2022-03-02 12:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ],
            //lokal - na wynos
            [
                'OrderNo' => 1,
                'OrderPrice' => 164,
                'OrderType' => 2,
                'Status' => 1,
                'OrderDate' => "2022-02-11 02:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ], 
            [
                'OrderNo' => 2,
                'OrderPrice' => 80,
                'OrderType' => 2,
                'Status' => 1,
                'OrderDate' => "2022-02-11 02:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 12,
                'OrderType' => 2,
                'Status' => 3,
                'OrderDate' => "2022-02-09 01:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 80,
                'OrderType' => 2,
                'Status' => 2,
                'OrderDate' => "2022-02-01 22:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ],
            [
                'OrderNo' => 2,
                'OrderPrice' => 164,
                'OrderType' => 2,
                'Status' => 3,
                'OrderDate' => "2022-02-01 22:20:10",
                'EndDate' => null,
                'UserId' => 0,
            ], 
            [
                'OrderNo' => 3,
                'OrderPrice' => 40,
                'OrderType' => 2,
                'Status' => 2,
                'OrderDate' => "2022-02-01 23:03:40",
                'EndDate' => null,
                'UserId' => 0,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 164,
                'OrderType' => 2,
                'Status' => 5,
                'OrderDate' => "2022-02-11 02:23:40",
                'EndDate' => "2022-02-11 03:23:40",
                'UserId' => 0,
            ], 
            [
                'OrderNo' => 2,
                'OrderPrice' => 80,
                'OrderType' => 2,
                'Status' => 4,
                'OrderDate' => "2022-02-11 03:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ],
            [
                'OrderNo' => 3,
                'OrderPrice' => 12,
                'OrderType' => 2,
                'Status' => 5,
                'OrderDate' => "2022-02-11 03:26:40",
                'EndDate' => "2022-02-11 04:26:40",
                'UserId' => 0,
            ], 
            [
                'OrderNo' => 1,
                'OrderPrice' => 40,
                'OrderType' => 2,
                'Status' => 3,
                'OrderDate' => "2022-02-12 12:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 16,
                'OrderType' => 2,
                'Status' => 2,
                'OrderDate' => "2022-01-11 12:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ], 
            [
                'OrderNo' => 2,
                'OrderPrice' => 80,
                'OrderType' => 2,
                'Status' => 4,
                'OrderDate' => "2022-01-11 03:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ],
            [
                'OrderNo' => 3,
                'OrderPrice' => 12,
                'OrderType' => 2,
                'Status' => 5,
                'OrderDate' => "2022-01-11 03:26:40",
                'EndDate' => "2022-01-11 04:26:40",
                'UserId' => 0,
            ], 
            [
                'OrderNo' => 1,
                'OrderPrice' => 40,
                'OrderType' => 2,
                'Status' => 5,
                'OrderDate' => "2022-01-12 12:23:40",
                'EndDate' => "2022-01-12 13:23:40",
                'UserId' => 0,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 164,
                'OrderType' => 2,
                'Status' => 3,
                'OrderDate' => "2022-03-01 02:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ], 
            [
                'OrderNo' => 2,
                'OrderPrice' => 80,
                'OrderType' => 2,
                'Status' => 5,
                'OrderDate' => "2022-03-01 03:23:40",
                'EndDate' => "2022-03-01 04:23:40",
                'UserId' => 0,
            ],
            [
                'OrderNo' => 1,
                'OrderPrice' => 12,
                'OrderType' => 2,
                'Status' => 3,
                'OrderDate' => "2022-03-02 03:26:40",
                'EndDate' => null,
                'UserId' => 0,
            ], 
            [
                'OrderNo' => 2,
                'OrderPrice' => 40,
                'OrderType' => 2,
                'Status' => 4,
                'OrderDate' => "2022-03-02 12:23:40",
                'EndDate' => null,
                'UserId' => 0,
            ],
        ];
    
        DB::table('orders')->insert($orders);
    }
}