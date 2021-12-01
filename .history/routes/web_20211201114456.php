<?php

// use App\Models\Produk;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
// use App\Http\Controllers\TransaksiController;
use App\Models\Produk;
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
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/produk', [ProdukController::class, 'index']);
Route::resource('/produk/produks', ProdukController::class)->middleware('auth');

Route::get('/data_admin', [AdminController::class, 'index']);

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'index'])->name('index');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('account', AdminController::class);
    Route::get('/showUser/{id}', [AdminController::class, 'showUser'])->name('showUser');
    Route::get('/editUser/{id}', [AdminController::class, 'editUser'])->name('editUser');
    Route::put('/updateUser/{id}', [AdminController::class, 'updateUser'])->name('updateUser');
    Route::get('/seo', [SeoController::class, 'seo'])->name('seo');
    Route::post('/seo_store', [SeoController::class, 'seo_store'])->name('seo_store');
});

// Route::get('/admin', [TransaksiController::class, 'index']);
// Route::resource('/transaksi/transaksis', TransaksiController::class)->middleware('auth');
