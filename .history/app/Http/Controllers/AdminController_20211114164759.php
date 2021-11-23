<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('/admin/data_admin', [
            "title" => "Data Admin",
            "admin" => User::all()
        ]);
    }
}
