<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\customer;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $asif=  customer::insert([
                   
             'name' => 'asif ali khan',
             'number' => '8240118320',
             'email' => 'asif ali@gmail.com',
            
            
        ]);

        
    }
}
