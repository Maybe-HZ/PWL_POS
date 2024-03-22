<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;
use App\Models\UserModel;
use Illuminate\Http\RedirectResponse;

class KategoriController extends Controller
{
    // public function index()
    // {
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
    // $data = DB::table('m_kategori')->get();
    // return view('kategori.kategori', compact('data'));
    // }

    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    // public function store(Request $request)
    // {
    //     KategoriModel::create([
    //         'kategori_kode' => $request->kategori_kode,
    //         'kategori_nama' => $request->kategori_nama,
    //     ]);
    //     return redirect('/kategori');
    // }

    // JS 6 B bagian 3
    public function store(Request $request):RedirectResponse
    {
        $validation = $request->validate([
            'kategori_kode' => 'bail|required|unique:m_kategori|max:255',
            'kategori_nama' => 'required',
        ]);

        return redirect('/kategori');
    }

    public function edit($id)
    {
        $data = KategoriModel::find($id);
        return view('kategori.edit', ['data' => $data]);
    }

    public function update($id, Request $request)
    {
        $kategori= KategoriModel::find($id);

        $kategori->kategori_kode = $request->kategori_kode;
        $kategori->kategori_nama = $request->kategori_nama;

        $kategori->save();
        return redirect('/kategori');
    }

    public function delete($id)
    {
        $data = KategoriModel::find($id);
        $data->delete();
        return redirect('/kategori');
    }


}
