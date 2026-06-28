

<?php $__env->startSection('content'); ?>


<div class="mb-4">

<h2>Tambah Kategori Seminar</h2>

<p class="text-muted">
Tambah kategori baru
</p>

</div>



<div class="card p-4">


<form action="<?php echo e(route('kategori.store')); ?>" method="POST">

<?php echo csrf_field(); ?>



<div class="mb-3">

<label class="form-label">
Nama Kategori
</label>


<input type="text"
name="nama_kategori"
class="form-control"
placeholder="Contoh: Workshop">


</div>




<div class="mb-3">

<label class="form-label">
Deskripsi
</label>


<textarea 
name="deskripsi"
class="form-control"
rows="4"
placeholder="Masukkan deskripsi"></textarea>


</div>



<button class="btn btn-primary">
Simpan
</button>



<a href="<?php echo e(route('kategori.index')); ?>"
class="btn btn-secondary">

Kembali

</a>


</form>


</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\event-seminar\resources\views/kategori/create.blade.php ENDPATH**/ ?>