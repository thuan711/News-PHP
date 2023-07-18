<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('category')->insert(
            [
                ['name'=>'Xã hội','img'=>'1','description'=>'abc', 'tin_id'=>'1'],
                
            ]
            );
    }
}
