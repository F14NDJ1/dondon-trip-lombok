<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Models\Produk;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
DI HALAMAN TRANSAKSI TIDAK BISA TAMPIL SEMUA DATA
*/

Route::get('/', function () {
    // $produks = json_decode($produk, true);
    $produk = Produk::all();
return view ('welcomme ',compact('produk'))
    // return view('welcome', [
    //     "produk" => Produk::all()
    // ]);
});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/produk', [ProdukController::class, 'index']);
Route::resource('/produk/produks', ProdukController::class)->middleware('auth');

Route::get('/data_admin', [AdminController::class, 'index']);

Route::get('/admin', [TransaksiController::class, 'index']);
Route::resource('/transaksi/transaksis', TransaksiController::class)->middleware('auth');
