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

        User::create([
            'username' => $valid_data['username'],
            'password' => Hash::make($valid_data['password']),
        ]);

        return redirect('/data_admin')->with('toast_success', 'Data Berhasil Ditambah!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        dd($user->id);
        User::destroy($user->id);
        if ($user->id == null) {
            # code...
            return redirect('/data_admin')->with('toast_error', 'Data Gagal Di hapus!');
        } else {
            return redirect('/data_admin')->with('toast_success', 'Data Berhasil Dihapus!');
        };
    }
}
