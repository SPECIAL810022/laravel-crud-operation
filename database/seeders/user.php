<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\kali;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_users')->insert([
            'name' => 'asif ali khan',
            'number' => '8240118320',
            'email' => 'asif@gmail.com'
        ]);
    }
}
