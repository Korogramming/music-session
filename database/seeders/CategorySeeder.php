<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime; //created_at用

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'guiter',
        ]);
        
        DB::table('categories')->insert([
            'name' => 'base',
        ]);

        DB::table('categories')->insert([
            'name' => 'keybord',
        ]);

        DB::table('categories')->insert([
            'name' => 'dram',
        ]);

        DB::table('categories')->insert([
            'name' => 'vocal',
        ]);
    }
}
