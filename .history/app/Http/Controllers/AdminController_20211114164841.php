<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
