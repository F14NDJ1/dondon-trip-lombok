<?php

// use App\Models\Produk;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
// use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
// use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
DI HALAMAN TRANSAKSI TIDAK BISA TAMPIL SEMUA DATA(done)
*/

Route::get(
    '/',
    function () {
        SEOMeta::setTitle('Home');
        $produk = DB::table('produks')

            ->orderBy('id_produk', 'desc')
            ->get();
        // $produk = Produk::all();
        return view('welcome ', compact('produk'));
        // return view('welcome', [
        //     "produk" => Produk::all()
        // ]);
    }

);
Auth::routes();
// Route::get('/home', [HomeController::class, 'index'])->name('home');


// Route::get('/produk', [ProdukController::class, 'index']);
// Route::resource('/produk/produks', ProdukController::class)->middleware('auth');

// Route::get('/data_admin', [AdminController::class, 'index']);


Route::group(['middleware' => ['auth']], function () {
    // Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/produk', [ProdukController::class, 'index'])->middleware('auth');
    Route::resource('/produk/produks', ProdukController::class)->middleware('auth');
    Route::get('/data_admin', [AdminController::class, 'index'])->middleware('auth');
    Route::get('/data_admin/tambah', [AdminController::class, 'tambah'])->middleware('auth');
});


// Route::get('/admin', [TransaksiController::class, 'index']);
// Route::resource('/transaksi/transaksis', TransaksiController::class)->middleware('auth');
