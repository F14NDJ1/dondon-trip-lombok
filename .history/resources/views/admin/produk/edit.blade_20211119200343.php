@extends('admin.partials.header')
<!-- Toastr -->
@section('container')


@include('sweetalert::alert')

<script src="admin/plugins/jquery/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/e3a3f494dd.js" crossorigin="anonymous"></script>
<!-- SweetAlert2 -->
<!-- <script src="admin/plugins/sweetalert2/sweetalert2.min.js"></script> -->
<!-- Toastr -->
<!-- <script src="admin/plugins/toastr/toastr.min.js"></script>

<script>
    Swal.mixin({
        toast: true,
        text: 'Data Berhasil Ditambahkan',
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
</script> -->
@if(session()->has( 'success'))
@endif
@endsection