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
                ['tenDT'=>'Oppo XA'.$i,'gia'=>mt_rand(90000,100000),'giakm'=>mt_rand(80000,90000),'ngayCapNhap'=>Now(),'idLoai'=>2],
                ['tenDT'=>'iPhone 12 Pro'.$i,'gia'=>mt_rand(130000,150000),'giakm'=>mt_rand(110000,130000),'ngayCapNhap'=>Now(),'idLoai'=>3],
                ['tenDT'=>'Nokia PA'.$i,'gia'=>mt_rand(60000,80000),'giakm'=>mt_rand(40000,60000),'ngayCapNhap'=>Now(),'idLoai'=>4],
            ]);
        }
    }
}
