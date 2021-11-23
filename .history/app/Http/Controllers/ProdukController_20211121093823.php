<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('/admin/produk/produk', [
            "title" => "Data Produk",
            "produks" => Produk::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //Done 
    {

        $request->file('gambar')->store('produk-jasa')
        $valid_data = $request->validate([
            'kategori' => 'required',
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required|max:255'
        ]);
        Produk::create($valid_data);
        return redirect('/produk')->with('toast_success', 'Data Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('/admin/produk/edit', [
            "title" => "Edit Data Produk",
            'produk' => $produk
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        Produk::destroy($produk->id_produk);
        if ($produk->id_produk == null) {
            # code...
            return redirect('/produk')->with('toast_success', 'Data Berhasil Dihapus!');
        } else {
            return redirect('/produk')->with('toast_danger', 'Data Gagal Dihapus!');
        };
    }
}
