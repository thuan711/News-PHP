<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class chenthanhvien extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ho = ['Nguyễn', 'Lê', 'Hoàng', 'Đào', 'Phan', 'Phan', 'Hồ'];
        $lot = ['Văn', 'Viết', 'Đức', 'Thị', 'Kim', 'Minh', ''];
        $ten = ['Tâm', 'Thuận', 'Hải', 'Hòa', 'Minh', 'Đức'];

        for ($i = 0; $i < 100; $i++) {
            $ht = Arr::random($ho) . ' ' . Arr::random($lot) . ' ' . Arr::random($ten);
            \DB::table('thanhvien')->insert([
                'hoTen' => $ht,
                'email' => Str::random(5) . '@gmail.com',
                'pass' => bcrypt('hehe')
            ]);
        }
    }
}
