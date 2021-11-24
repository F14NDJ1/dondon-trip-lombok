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
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-primary">
                                <i class="fas fa-plus"></i>Edit
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-primary">
                                <i class="fas fa-plus"></i>Hapus
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Aksi</th>
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
                                    <td><a href="/transaksi/transaksis/{{ $tr['id_trs'] }}" class="badge bg-info"><i class="fas fa-eye d-inline"></i></span></a></td>
                                    <td>{{$tr["nama_pelanggan"]}}</td>
                                    <td>{{$tr["no_wa"]}}</td>
                                    <td>{{$tr["kategori"]}}</td>
                                    <td>{{$tr["nama_produk"]}}</td>
                                    <td>{{$tr["harga_prdk"]}}</td>
                                    <td>{{$tr["total"]}}</td>
                                    <td>{{$tr["status"]}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Aksi</th>
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