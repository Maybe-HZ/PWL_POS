<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// baris baru yang ditambahkan setelah megenerate file seeder
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // pengerjaan praktikum 3 bagian 1 "membuat data level"
    public function run(): void
    {
        $data=[
            ['level_id'=>'1','level_kode'=>'ADM','level_nama'=>'Administrator'],
            ['level_id'=>'2','level_kode'=>'MNG','level_nama'=>'Manager'],
            ['level_id'=>'3','level_kode'=>'STF','level_nama'=>'Staff/Kasir'],
        ];
        DB::table('m_level')->insert($data);
    }
}
