

<?php $__env->startSection('content'); ?>

<div class="mb-4">

    <h2>Tambah Seminar</h2>

    <p class="text-muted">
        Tambah data seminar baru
    </p>

</div>

<div class="card p-4">

<form action="<?php echo e(route('seminar.store')); ?>"
      method="POST"
      enctype="multipart/form-data">

<?php echo csrf_field(); ?>

<div class="mb-3">

<label class="form-label">
Kategori Seminar
</label>

<select name="kategori_id" class="form-select" required>

<option value="">-- Pilih Kategori --</option>

<?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<option value="<?php echo e($item->id); ?>">

<?php echo e($item->nama_kategori); ?>


</option>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</select>

</div>



<div class="mb-3">

<label class="form-label">
Judul Seminar
</label>

<input
type="text"
name="judul"
class="form-control"
value="<?php echo e(old('judul')); ?>"
required>

</div>



<div class="mb-3">

<label class="form-label">
Pembicara
</label>

<input
type="text"
name="pembicara"
class="form-control"
value="<?php echo e(old('pembicara')); ?>"
required>

</div>



<div class="mb-3">

<label class="form-label">
Tanggal
</label>

<input
type="date"
name="tanggal"
class="form-control"
value="<?php echo e(old('tanggal')); ?>"
required>

</div>



<div class="mb-3">

<label class="form-label">
Lokasi
</label>

<input
type="text"
name="lokasi"
class="form-control"
value="<?php echo e(old('lokasi')); ?>"
required>

</div>



<div class="mb-3">

<label class="form-label">
Kuota
</label>

<input
type="number"
name="kuota"
class="form-control"
min="1"
value="<?php echo e(old('kuota')); ?>"
required>

</div>



<div class="mb-4">

<label class="form-label">
Poster Seminar
</label>

<input
type="file"
name="poster"
class="form-control"
accept=".jpg,.jpeg,.png"
required>

<div class="form-text">
Format: JPG, JPEG, atau PNG (maks. 2 MB)
</div>

</div>



<button class="btn btn-primary">
Simpan
</button>

<a href="<?php echo e(route('seminar.index')); ?>"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\event-seminar\resources\views/seminar/create.blade.php ENDPATH**/ ?>