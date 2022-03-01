<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
            ->insert([[
                'Name' => 'Jan Kowalski',
                'email' => 'jan.kowalski@gmail.com',
                'password' => Hash::make('user'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                
            ],
            [
                'Name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('localhostPassword'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
             
            ],
            [
                'Name' => 'Anita Tabaczka',
                'email' => 'anita.tabaczka@gmail.com',
                'password' => Hash::make('user'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            
            ],
            [
                'Name' => 'Jakub Żebrowski',
                'email' => 'jakub.zebrowski@gmail.com',
                'password' => Hash::make('user'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            
            ],
            [
                'Name' => 'Marcin Wojtkowiak',
                'e-mail' => 'marcin.wojtkowiak@gmail.com',
                'password' => Hash::make('user'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            
            ],
            [
                'Name' => 'Michał Wiśniowski',
                'e-mail' => 'michal.wisniowski@gmail.com',
                'password' => Hash::make('user'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            
            ],
        ]);
    }
}
