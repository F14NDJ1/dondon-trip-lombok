<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('/admin/data_admin', [
            "title" => "Data Admin",
            "admin" => User::all()
        ]);
    }

    public function store(Request $request)
    {
        $valid_data = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        return User::create([
            'username' => $valid_data['username'],
            'password' => Hash::make($valid_data['password']),
        ]);

        // return redirect('/data_admin')->with('toast_success', 'Data Berhasil Ditambah!');
    }

    public function destroy(User $user)
    {
        dd($user);
        User::destroy($user->id);
        if ($user->id == null) {
            # code...
            return redirect('/data_admin')->with('toast_success', 'Data Berhasil Dihapus!');
        } else {
            return redirect('/data_admin')->with('toast_danger', 'Data Gagal Di hapus!');
        };
    }
}
