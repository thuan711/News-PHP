<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class chenLoaisp extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('loaisp')->insert([
            ['tenLoai'=>'Samsung','thuTu'=>1,'anHien'=>1],
            ['tenLoai'=>'Apple','thuTu'=>2,'anHien'=>1],
            ['tenLoai'=>'Xiaomi','thuTu'=>3,'anHien'=>1],
            ['tenLoai'=>'Vivo','thuTu'=>4,'anHien'=>0],
            ['tenLoai'=>'LG','thuTu'=>5,'anHien'=>1],
        ]);
    }
}
