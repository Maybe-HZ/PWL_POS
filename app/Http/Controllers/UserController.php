<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // pengerjaan Jobsheet 3 praktikum 6 bagian 5
    // public function index()
    // {
    //     // pengerjaan Jobsheet 3 praktikum 6 bagian 8
    //     // $data=[
    //     //     'level_id' => '4',
    //     //     'username' => 'customer-1',
    //     //     'nama' => 'Pelanggan',
    //     //     'password' => Hash::make('12345'),
    //     // ];
    //     // UserModel::insert($data);

    //     // pengerjaan Jobsheet 3 praktikum 6 bagian 10
    //     // $data=[
    //     //     'nama' => 'Pelanggan Pertama',
    //     // ];
    //     // UserModel::where('username', 'customer-1')->update($data);

    //     // pengerjaan jobsheet 4 praktikum 1 bagian 2
    //     // $data = [
    //     //     'level_id' => 2,
    //     //     'username' => 'manager_dua',
    //     //     'nama' => 'Manager 2',
    //     //     'password' => Hash::make('12345')
    //     // ];
    //     // UserModel::insert($data);

    //     // pengerjaan jobsheet 4 praktikum 1 bagian 5
    //     // $data = [
    //     //     'level_id' => 2,
    //     //     'username' => 'manager_tiga',
    //     //     'nama' => 'Manager 3',
    //     //     'password' => Hash::make('12345')
    //     // ];
    //     // UserModel::create($data);

    //     // $user = UserModel::all();
    //     // return view('user.user', ['data' => $user]);

    //     // pengerjaan jobsheet 4 praktikum 2.1 bagian 1
    //     // $user = UserModel::find(1);

    //     // pengerjaan jobsheet 4 praktikum 2.1 bagian 4
    //     // $user = UserModel::where('level_id', 1)->first();

    //     // pengerjaan jobsheet 4 praktikum 2.1 bagian 6
    //     // $user = UserModel::firstWhere('level_id',1);

    //     // pengerjaan jobsheet 4 praktikum 2.1 bagian 8
    //     // $user = UserModel::findOr(1,['username','nama'],function(){
    //     //     abort(404);
    //     // });

    //     // pengerjaan jobsheet 4 praktikum 2.1 bagian 10
    //     // $user = UserModel::findOr(20,['username','nama'],function(){
    //     //     abort(404);
    //     // });

    //     // pengerjaan jobsheet 4 praktikum 2.2 bagian 1
    //     // $user = UserModel::findOrFail(1);

    //     // pengerjaan jobsheet 4 praktikum 2.2 bagian 3
    //     // $user = UserModel::where('username','manager9')->firstOrFail();

    //     // pengerjaan jobsheet 4 praktikum 2.3 bagian 1
    //     // $user = UserModel::where('level_id',2)->count();
    //     // dd($user);
    //     // return view('user.user', ['data' => $user]);

    //     // pengerjaan jobsheet 4 praktikum 2.4 bagian 1
    //     // $user = UserModel::firstOrCreate(
    //     //     [
    //     //         'username' => 'manager',
    //     //         'nama' => 'Manager'
    //     //     ]
    //     // );

    //     // pengerjaan jobsheet 4 praktikum 2.4 bagian 4
    //     // $user = UserModel::firstOrCreate(
    //     //     [
    //     //         'username' => 'manager22',
    //     //         'nama' => 'Manager Dua Dua',
    //     //         'password' => Hash::make('12345'),
    //     //         'level_id' => 2,
    //     //     ]
    //     // );

    //     // pengerjaan jobsheet 4 praktikum 2.4 bagian 6
    //     // $user = UserModel::firstOrNew(
    //     //     [
    //     //         'username' => 'manager',
    //     //         'nama' => 'Manager',
    //     //     ]
    //     // );

    //     // pengerjaan jobsheet 4 praktikum 2.4 bagian 8
    //     // $user = UserModel::firstOrNew(
    //     //     [
    //     //         'username' => 'manager11',
    //     //         'nama' => 'Manager Tiga Tiga',
    //     //         'password' => Hash::make('12345'),
    //     //         'level_id' => 2,
    //     //     ]
    //     // );
    //     // // pengerjaan jobsheet 4 praktikum 2.4 bagian 10
    //     // $user->save();

    //     // return view('user.user', ['data' => $user]);

    //     // pengerjaan jobsheet 4 praktikum 2.5 bagian 1
    //     // $user = UserModel::create([
    //     //     'username'=>'manager55',
    //     //     'nama'=>'Manager55',
    //     //     'password'=>Hash::make('12345'),
    //     //     'level_id'=>2
    //     // ]);

    //     // $user->username='manager56';
    //     // $user->isDirty();
    //     // $user->isDirty('username');
    //     // $user->isDirty('nama');
    //     // $user->isDirty(['nama','username']);

    //     // $user->isClean();
    //     // $user->isClean('username');
    //     // $user->isClean('nama');
    //     // $user->isClean(['nama','username']);

    //     // $user->save();

    //     // $user->isDirty();
    //     // $user->isClean();
    //     // dd($user->isDirty());

    //     // jobsheet 4 praktikum 2.5 bagian 2
    //     // $user = UserModel::create([
    //     //     'username' => 'manager11',
    //     //     'nama' => 'Manager11',
    //     //     'password' => Hash::make('12345'),
    //     //     'level_id' => 2
    //     // ]);

    //     // $user->username = 'manager12';

    //     // $user->save();
    //     // $user->wasChanged(); // true
    //     // $user->wasChanged('username'); // true
    //     // $user->wasChanged(['username','level_id']); // true
    //     // $user->wasChanged('nama'); // false
    //     // // Jobsheet 4 praktikum 2.5 bagian 3
    //     // dd($user->wasChanged(['nama','username'])); // true

    // }

    // pengerjaan Jobsheet 4 Praktikum 2.6 bagian 3
    public function index()
    {
        // $user = UserModel::all();
        // return view('user.user', ['data' => $user]);

        // pengerjaan Jobsheet 4 praktikum 2.7 bagian 2
        $user = UserModel::with('level')->get();
        // dd($user);
        // pengerjaan Jobsheet 4 praktikum 2.7 bagian 4
        return view('user.user', ['data' => $user]);
    }

    // pengerjaan Jobsheet 4 Praktikum 2.6 bagian 5
    public function tambah()
    {
        return view('user.user_tambah');
    }

    // pengerjaan Jobsheet 4 praktikum 2.6 bagian 10
    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);
        return redirect('/user');
    }

    // pengerjaan Jobsheet 4 praktikum 2.6 bagian 12
    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user.user_ubah', ['data' => $user]);
    }

    // pengerjaan Jobsheet 4 praktikum 2.6 bagian 16
    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->level_id = $request->level_id;

        $user->save();

        return redirect('/user');
    }

    // pengerjaan Jobsheet 4 praktikum 2.6 bagian 18
    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();
        return redirect('/user');
    }
}
