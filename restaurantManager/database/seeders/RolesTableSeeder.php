<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => "user", 
                'created_at' => new \DateTime,
                'updated_at' => null,
            ], 
            [
                'name' => "admin", 
                'created_at' => new \DateTime,
                'updated_at' => null,
            ], 
        ];
    
        DB::table('roles')->insert($roles);
    }
}
