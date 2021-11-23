<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;


    protected $fillable = ['nama_pelanggan', 'no_wa', 'id_produk', 'total_pembayaran', 'status'];

    protected $primaryKey = 'id_transaksi';
}
