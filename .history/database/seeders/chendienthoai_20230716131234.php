<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class chendienthoai extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<300;$i++){
            \DB::table('dienthoai')->insert([
                ['tenDT'=>'Oppo XA'.$i,'gia'=>mt_rand(700000,1000000),'ngayCapNhap'=>Now(),'idLoai'=>2],
                ['tenDT'=>'iPhone 12 Pro'.$i,'gia'=>mt_rand(1000000,1500000),'ngayCapNhap'=>Now(),'idLoai'=>3],
                ['tenDT'=>'Nokia PA'.$i,'gia'=>mt_rand(250000,800000),'ngayCapNhap'=>Now(),'idLoai'=>4],
            ]);
        }
    }
}
