<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Transaksi;


class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $data = DB::table('transaksis')
            ->join('produks', 'transaksis.id_transaksi', '=', 'produks.id_produk')
            ->select(
                'transaksis.id_transaksi as id_trs',
                'transaksis.nama_pelanggan as nama',
                'transaksis.no_wa as no_wa',
                'transaksis.total_pembayaran as total',
                'transaksis.status as status',
                'transaksis.created_at as tanggal',
                'produks.id_produk as id_prd',
                'produks.kategori as kategori',
                'produks.nama_produk as nama_prdk',
                'produks.harga_produk as harga_prdk'
            )
            ->get();

        $transaksi = json_decode($data, true);

        return view('/admin/transaksi/index', compact('transaksi'), [
            "title" => "Data Transaksi",
            "produk" => Produk::all()

        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //Done 
    {

        $valid_data = $request->validate([
            'nama_pelanggan' => 'required',
            'no_wa' => 'required',
            'id_produk' => 'required',
            'total_pembayaran' => 'required',
            'status' => 'required'
        ]);

        Transaksi::create($valid_data);
        return redirect('/admin')->with('toast_success', 'Data Berhasil Ditambah!');
    }
}
