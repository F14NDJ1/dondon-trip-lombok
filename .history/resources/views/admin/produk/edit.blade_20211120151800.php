@extends('admin.partials.header')
<!-- Toastr -->
@section('container')

<!-- <link rel="stylesheet" href="admin/plugins/toastr/toastr.min.css"> -->

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Produk</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="/produk/produks">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control" aria-label=" Default select example" name="kategori">
                                        <option value="alat">Alat</option>
                                        <option value="trip">Trip</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_produk">Nama Produk</label>
                                    <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" id="nama_produk" required autofocus value="{{ old('nama_produk', $produk->nama_produk) }}">
                                </div>
                                <div class="form-group">
                                    <label for="harga_produk">Harga Produk</label>
                                    <div class="input-group">
                                        <div class="input-group-text">Rp</div>
                                        <input type="number" class="form-control @error('harga_produk') is-invalid @enderror" name="harga_produk" id="harga_produk" required value="{{ old('harga_produk', $produk->harga_produk) }}">
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <label for="gambar">Gambar Produk</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="gambar" id="gambar" required>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="3" placeholder="Enter ..." required value="{{ old('deskripsi', $produk->deskripsi) }}></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class=" card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@if(session()->has( 'success'))
@endif
@endsection