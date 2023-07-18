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
                ['tenDT'=>'Oppo XA'.$i,'gia'=>mt_rand(900000,1000000),'giakm'=>mt_rand(800000,900000),'ngayCapNhap'=>Now(),'idLoai'=>2],
                ['tenDT'=>'iPhone 12 Pro'.$i,'gia'=>mt_rand(1300000,1500000),'giakm'=>mt_rand(1100000,1300000),'ngayCapNhap'=>Now(),'idLoai'=>3],
                ['tenDT'=>'Nokia PA'.$i,'gia'=>mt_rand(600000,800000),'giakm'=>mt_rand(400000,600000),'ngayCapNhap'=>Now(),'idLoai'=>4],
            ]);
        }
    }
}
