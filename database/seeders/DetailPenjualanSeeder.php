<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // pengerjaan praktikum 3 bagian 10 "membuat data detail penjualan dengan 3 barang untuk setiap transaksi"
    public function run(): void
    {
        $data = [
            [
                'detail_id' => '1',
                'penjualan_id' => '1',
                'barang_id' => '1',
                'harga' => '15000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => '2',
                'penjualan_id' => '1',
                'barang_id' => '3',
                'harga' => '5000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => '3',
                'penjualan_id' => '1',
                'barang_id' => '9',
                'harga' => '5000',
                'jumlah' => '5',
            ],
            [
                'detail_id' => '4',
                'penjualan_id' => '2',
                'barang_id' => '2',
                'harga' => '15000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => '5',
                'penjualan_id' => '2',
                'barang_id' => '4',
                'harga' => '8000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => '6',
                'penjualan_id' => '2',
                'barang_id' => '5',
                'harga' => '10000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => '7',
                'penjualan_id' => '3',
                'barang_id' => '1',
                'harga' => '15000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => '8',
                'penjualan_id' => '3',
                'barang_id' => '3',
                'harga' => '5000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => '9',
                'penjualan_id' => '3',
                'barang_id' => '9',
                'harga' => '5000',
                'jumlah' => '5',
            ],
            [
                'detail_id' => '10',
                'penjualan_id' => '4',
                'barang_id' => '2',
                'harga' => '15000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => '11',
                'penjualan_id' => '4',
                'barang_id' => '4',
                'harga' => '8000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => '12',
                'penjualan_id' => '4',
                'barang_id' => '5',
                'harga' => '10000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => '13',
                'penjualan_id' => '5',
                'barang_id' => '1',
                'harga' => '15000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => '14',
                'penjualan_id' => '5',
                'barang_id' => '3',
                'harga' => '5000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => '15',
                'penjualan_id' => '5',
                'barang_id' => '9',
                'harga' => '5000',
                'jumlah' => '5',
            ],
            [
                'detail_id' => '16',
                'penjualan_id' => '6',
                'barang_id' => '2',
                'harga' => '15000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => '17',
                'penjualan_id' => '6',
                'barang_id' => '4',
                'harga' => '8000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => '18',
                'penjualan_id' => '6',
                'barang_id' => '5',
                'harga' => '10000',
                'jumlah' => '1',
            ], [
                'detail_id' => '19',
                'penjualan_id' => '7',
                'barang_id' => '1',
                'harga' => '15000',
                'jumlah' => '1',
            ], [
                'detail_id' => '20',
                'penjualan_id' => '7',
                'barang_id' => '3',
                'harga' => '5000',
                'jumlah' => '1',
            ],
            [
                'detail_id' => '21',
                'penjualan_id' => '7',
                'barang_id' => '9',
                'harga' => '5000',
                'jumlah' => '5',
            ],
            [
                'detail_id' => '22',
                'penjualan_id' => '8',
                'barang_id' => '2',
                'harga' => '15000',
                'jumlah' => '1',
            ], [
                'detail_id' => '23',
                'penjualan_id' => '8',
                'barang_id' => '4',
                'harga' => '8000',
                'jumlah' => '1',
            ], [
                'detail_id' => '24',
                'penjualan_id' => '8',
                'barang_id' => '5',
                'harga' => '10000',
                'jumlah' => '1',
            ], [
                'detail_id' => '25',
                'penjualan_id' => '9',
                'barang_id' => '1',
                'harga' => '15000',
                'jumlah' => '1',
            ], [
                'detail_id' => '26',
                'penjualan_id' => '9',
                'barang_id' => '3',
                'harga' => '5000',
                'jumlah' => '1',
            ], [
                'detail_id' => '27',
                'penjualan_id' => '9',
                'barang_id' => '9',
                'harga' => '5000',
                'jumlah' => '5',
            ], [
                'detail_id' => '28',
                'penjualan_id' => '10',
                'barang_id' => '2',
                'harga' => '15000',
                'jumlah' => '1',
            ], [
                'detail_id' => '29',
                'penjualan_id' => '10',
                'barang_id' => '4',
                'harga' => '8000',
                'jumlah' => '1',
            ], [
                'detail_id' => '30',
                'penjualan_id' => '10',
                'barang_id' => '5',
                'harga' => '10000',
                'jumlah' => '1',
            ]

        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
