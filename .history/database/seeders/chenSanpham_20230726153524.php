<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class chenSanpham extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('sanpham')->insert([
            ['tenSP'=>'Gói 3 tháng','gia'=>30000,'anHien'=>1],
            ['tenSP'=>'Gói 6 tháng','gia'=>50000,'anHien'=>1],
            ['tenSP'=>'Gói 1 năm','thuTu'=>90000,'anHien'=>1],
        ]);
    }
}
