<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kategoriController extends Controller
{
    public function index()
    {
        // pengerjaan Jobsheet 3 Praktikum 5 bagian 3
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan Ringan',
        //     'created_at' => now(),
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Insert Data Baru Berhasil';

        // pengerjaan Jobsheet 3 Praktikum 5 bagian 5
        // $row=DB::table('m_kategori')->where('kategori_kode','SNK')->update(['kategori_nama'=>'Camilan']);
        // return 'Update Data Berhasil. Jumlah data yang diupdate: ' . $row. ' baris';

        // pengerjaan Jobsheet 3 Praktikum 5 bagian 7
        // $row = DB::table('m_kategori')->where('kategori_kode','SNK')->delete();
        // return 'Delete Data Berhasil. Jumlah data yang dihapus: ' . $row. ' baris';

        // pengerjaan Jobsheet 3 Praktikum 5 bagian 8
        $data = DB::table('m_kategori')->get();
        return view('kategori.kategori', compact('data'));
    }
}
