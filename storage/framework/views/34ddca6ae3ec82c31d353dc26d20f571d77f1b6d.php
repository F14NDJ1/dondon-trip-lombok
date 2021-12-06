
<!-- Toastr -->
<?php $__env->startSection('container'); ?>

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
                        <form method="POST" action="/produk/produks/<?php echo e($produk->id_produk); ?>" enctype="multipart/form-data">
                            <?php echo method_field('put'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control" aria-label=" Default select example" name="kategori">
                                        <?php if($produk->kategori == 'Jasa'): ?>
                                        <option value="Jasa" selected>Jasa</option>
                                        <option value="Trip">Trip</option>
                                        <?php else: ?>
                                        <option value="Jasa">Jasa</option>
                                        <option value="Trip" selected>Trip</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_produk">Nama Produk</label>
                                    <input type="text" class="form-control <?php $__errorArgs = ['nama_produk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama_produk" id="nama_produk" required autofocus value="<?php echo e(old('produk', $produk->nama_produk)); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="harga_produk">Harga Produk</label>
                                    <div class="input-group">
                                        <div class="input-group-text">Rp</div>
                                        <input type="number" class="form-control <?php $__errorArgs = ['harga_produk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="harga_produk" id="harga_produk" required value="<?php echo e(old('harga_produk', $produk->harga_produk)); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar Produk</label>
                                    <input type="hidden" name="oldImage" value="<?php echo e($produk->image); ?>">
                                    <?php if($produk->gambar): ?>
                                    <img src="<?php echo e(asset('storage/' . $produk->gambar)); ?>" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                    <?php else: ?>
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                    <?php endif; ?>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="gambar" id="gambar" onchange="previewImage()">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="deskripsi" rows="3" placeholder="Enter ..." required value=""><?php echo e(old('deskripsi', $produk->deskripsi)); ?></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
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
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<script src="/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
    $(function() {
        bsCustomFileInput.init();
    });


    function previewImage() {
        const image = document.querySelector('#gambar');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.dosplay = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\dondon-beach\resources\views//admin/produk/edit.blade.php ENDPATH**/ ?>