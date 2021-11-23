<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;


    protected $fillable = ['nama_pelanggan', 'no_wa', 'harga_produk', 'gambar', 'deskripsi'];

    protected $primaryKey = 'id_produk';
}
