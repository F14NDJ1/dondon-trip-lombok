<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;


    // protected $fillable = ['nama_pelanggan', 'no_wa', 'id_produk', 'total_pembayaran', 'status'];
    protected $guarded = ['is_transaksi'];

    protected $primaryKey = 'id_transaksi';

    public function produk()
    {
        return $this->belongsTo(Produk::class); //untuk menghubungkan antar model
    }
}
