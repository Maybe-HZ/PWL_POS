<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // pengerjaan praktikum 3 bagian 10 "membuat data kategori"
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => '1',
                'kategori_kode' => 'MAKANAN',
                'kategori_nama' => 'Makanan'
            ],
            [
                'kategori_id' => '2',
                'kategori_kode' => 'MINUMAN',
                'kategori_nama' => 'Minuman'
            ],
            [
                'kategori_id' => '3',
                'kategori_kode' => 'SNACK',
                'kategori_nama' => 'Snack'
            ],
            [
                'kategori_id' => '4',
                'kategori_kode' => 'ICECREAM',
                'kategori_nama' => 'Ice Cream'
            ],
            [
                'kategori_id' => '5',
                'kategori_kode' => 'EXTRA',
                'kategori_nama' => 'Extra',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
