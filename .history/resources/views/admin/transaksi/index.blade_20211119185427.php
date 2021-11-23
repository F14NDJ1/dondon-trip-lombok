@extends('admin.partials.header')

@section('container')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Transaksi</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-2">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                                <i class="fas fa-plus"></i>Tambah Data
                            </button>
                            <div class="modal fade" id="modal-primary">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Tambah Transaksi</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="/transaksi/posts">
                                            @csrf
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="nama">Nama Pelanggan</label>
                                                    <input type="nama" class="form-control" id="nama">
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_wa">No Whatsapp</label>
                                                    <input type="no_wa" class="form-control" id="no_wa">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Jenis Produk</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Total Pembayaran</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-general dropdown-toggle" data-toggle="dropdown">
                                                            Status
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li class="dropdown-item"><a href="#">Lunas</a></li>
                                                            <li class="dropdown-item"><a href="#">DP</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-outline-light">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- @auth
                        <h1>ini auth</h1>
                        @else
                        <h1>ini guest</h1>
                        @endauth -->
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Pelanggan</th>
                                    <th>No WhatsApp</th>
                                    <th>Kategori</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Total Pembayaran</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaksi as $tr)
                                <tr>
                                    <td>{{$tr["nama"]}}</td>
                                    <td>{{$tr["no_wa"]}}</td>
                                    <td>{{$tr["kategori"]}}</td>
                                    <td>{{$tr["nama_prdk"]}}</td>
                                    <td>{{$tr["harga_prdk"]}}</td>
                                    <td>{{$tr["total"]}}</td>
                                    <td>{{$tr["status"]}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama Pelanggan</th>
                                    <th>No WhatsApp</th>
                                    <th>Kategori</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Total Pembayaran</th>
                                    <th>Status</th>
                                </tr>
                            </tfoot>
                        </table>
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

@endsection
<!-- <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="admin/plugins/jszip/jszip.min.js"></script>
<script src="admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script> -->