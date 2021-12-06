<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    }
}
