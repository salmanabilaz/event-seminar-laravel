

<?php $__env->startSection('content'); ?>

<div class="mb-4">

    <h2>Edit Seminar</h2>

    <p class="text-muted">
        Ubah data seminar
    </p>

</div>

<div class="card p-4">

<form action="<?php echo e(route('seminar.update', $seminar->id)); ?>"
      method="POST"
      enctype="multipart/form-data">

<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>

<div class="mb-3">

<label class="form-label">
Kategori Seminar
</label>

<select name="kategori_id" class="form-select" required>

<?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<option value="<?php echo e($item->id); ?>"
<?php echo e($seminar->kategori_id == $item->id ? 'selected' : ''); ?>>

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
value="<?php echo e(old('judul', $seminar->judul)); ?>"
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
value="<?php echo e(old('pembicara', $seminar->pembicara)); ?>"
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
value="<?php echo e(old('tanggal', $seminar->tanggal)); ?>"
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
value="<?php echo e(old('lokasi', $seminar->lokasi)); ?>"
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
value="<?php echo e(old('kuota', $seminar->kuota)); ?>"
required>

</div>



<div class="mb-3">

<label class="form-label">
Poster Saat Ini
</label>

<br>

<?php if($seminar->poster): ?>

<img src="<?php echo e(asset('storage/'.$seminar->poster)); ?>"
     width="150"
     class="rounded border mb-3">

<?php endif; ?>

</div>



<div class="mb-4">

<label class="form-label">
Ganti Poster (Opsional)
</label>

<input
type="file"
name="poster"
class="form-control"
accept=".jpg,.jpeg,.png">

<div class="form-text">
Kosongkan jika tidak ingin mengganti poster.
</div>

</div>



<button class="btn btn-primary">
Update
</button>

<a href="<?php echo e(route('seminar.index')); ?>"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\event-seminar\resources\views/seminar/edit.blade.php ENDPATH**/ ?>