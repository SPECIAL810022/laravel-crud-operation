<?php

namespace Database\Seeders;

use App\Models\customer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
           $this->call([
            // this class name is very importaint,you should mention properly this name
             customerSeeder::class
           ]);
    }
}
