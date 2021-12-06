<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $valid_data = $request->validate([
            'kategori' => 'required',
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'gambar' => 'image|file',
            'deskripsi' => 'required|max:255'
        ]);

        $gambar = $request->file('gambar');


        $gambar1 = time() . "_" . $gambar->getClientOriginalName();


        //menyimpan data foto ke dlm folder yg dibuat

        $tujuan_upload = 'data_gambar';

        $gambar->move($tujuan_upload, $gambar1);

        // -------------------------------------------
        if ($request->file('gambar')) {
            $valid_data['gambar'] = $request->file('gambar')->store('produk-jasa');
        }

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
        $valid_data = $request->validate([
            'kategori' => 'required',
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'gambar' => 'image|file',
            'deskripsi' => 'required|max:255'
        ]);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $valid_data['gambar'] = $request->file('gambar')->store('produk-jasa');
        }

        Produk::where('id_produk', $produk->id_produk)
            ->update($valid_data);
        return redirect('/produk')->with('toast_success', 'Data Berhasil Di update!');
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
            return redirect('/produk')->with('toast_danger', 'Data Gagal Di hapus!');
        };
    }
}
