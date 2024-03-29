<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([ingredients::class, Meals::class]);
        $this->call([ RolesTableSeeder::class ]);
        $this->call([ MealsCategory::class ]);
        $this->call([UsersSeeder::class]);
        $this->call([RoleUserSeeder::class]);
        $this->call([addressesSeeder::class]);
        $this->call([ordersSeeder::class]);
        $this->call([orderMealsSeeder::class]);
        $this->call([orderStatusesSeeder::class]);
    }
}
