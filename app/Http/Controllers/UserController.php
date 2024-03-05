<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // pengerjaan Jobsheet 3 praktikum 6 bagian 5
    public function index()
    {
        // pengerjaan Jobsheet 3 praktikum 6 bagian 8
        // $data=[
        //     'level_id' => '4',
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        // ];
        // UserModel::insert($data);

        // pengerjaan Jobsheet 3 praktikum 6 bagian 10
        // $data=[
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data);

        // pengerjaan jobsheet 4 praktikum 1 bagian 2
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_dua',
        //     'nama' => 'Manager 2',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::insert($data);

        // pengerjaan jobsheet 4 praktikum 1 bagian 5
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // $user = UserModel::all();
        // return view('user.user', ['data' => $user]);

        // pengerjaan jobsheet 4 praktikum 2.1 bagian 1
        // $user = UserModel::find(1);

        // pengerjaan jobsheet 4 praktikum 2.1 bagian 4
        // $user = UserModel::where('level_id', 1)->first();

        // pengerjaan jobsheet 4 praktikum 2.1 bagian 6
        // $user = UserModel::firstWhere('level_id',1);

        // pengerjaan jobsheet 4 praktikum 2.1 bagian 8
        // $user = UserModel::findOr(1,['username','nama'],function(){
        //     abort(404);
        // });

        // pengerjaan jobsheet 4 praktikum 2.1 bagian 10
        // $user = UserModel::findOr(20,['username','nama'],function(){
        //     abort(404);
        // });

        // pengerjaan jobsheet 4 praktikum 2.2 bagian 1
        // $user = UserModel::findOrFail(1);

        // pengerjaan jobsheet 4 praktikum 2.2 bagian 3
        // $user = UserModel::where('username','manager9')->firstOrFail();

        // pengerjaan jobsheet 4 praktikum 2.3 bagian 1
        // $user = UserModel::where('level_id',2)->count();
        // dd($user);
        // return view('user.user', ['data' => $user]);

        // pengerjaan jobsheet 4 praktikum 2.4 bagian 1
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager'
        //     ]
        // );

        // pengerjaan jobsheet 4 praktikum 2.4 bagian 4
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        //     ]
        // );

        // pengerjaan jobsheet 4 praktikum 2.4 bagian 6
        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager',
        //     ]
        // );

        // pengerjaan jobsheet 4 praktikum 2.4 bagian 8
        $user = UserModel::firstOrNew(
            [
                'username' => 'manager11',
                'nama' => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2,
            ]
        );
        // pengerjaan jobsheet 4 praktikum 2.4 bagian 10
        $user->save();

        return view('user.user', ['data' => $user]);
    }
}
