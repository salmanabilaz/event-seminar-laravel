

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2>Data Seminar</h2>
        <p class="text-muted">
            Kelola data seminar
        </p>
    </div>

    <a href="<?php echo e(route('seminar.create')); ?>" class="btn btn-primary">
        + Tambah Seminar
    </a>

</div>

<?php if(session('success')): ?>
<div class="alert alert-success">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<div class="card p-4 mb-4">

<form action="<?php echo e(route('seminar.index')); ?>" method="GET">

<div class="row g-3">

<div class="col-md-5">

<input
type="text"
name="search"
class="form-control"
placeholder="Cari judul atau pembicara..."
value="<?php echo e(request('search')); ?>">

</div>

<div class="col-md-3">

<select
name="kategori"
class="form-select">

<option value="">
Semua Kategori
</option>

<?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<option
value="<?php echo e($kategori->id); ?>"
<?php echo e(request('kategori') == $kategori->id ? 'selected' : ''); ?>>

<?php echo e($kategori->nama_kategori); ?>


</option>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</select>

</div>

<div class="col-md-2">

<input
type="date"
name="tanggal"
class="form-control"
value="<?php echo e(request('tanggal')); ?>">

</div>

<div class="col-md-2 d-grid">

<button class="btn btn-primary">
Cari
</button>

<a href="<?php echo e(route('seminar.index')); ?>"
class="btn btn-secondary mt-2">

Reset

</a>

</div>

</div>

</form>

</div>

<div class="card p-4">

<div class="table-responsive">

<table class="table table-hover align-middle">

<thead>

<tr>

<th>No</th>
<th>Kategori</th>
<th>Poster</th>
<th>Judul</th>
<th>Pembicara</th>
<th>Tanggal</th>
<th>Lokasi</th>
<th>Kuota</th>
<th width="130">Aksi</th>

</tr>

</thead>

<tbody>

<?php $__empty_1 = true; $__currentLoopData = $seminars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seminar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

<tr>

<td><?php echo e($seminars->firstItem() + $loop->index); ?></td>

<td><?php echo e($seminar->kategori->nama_kategori); ?></td>

<td>

<?php if($seminar->poster): ?>

<img
src="<?php echo e(asset('storage/'.$seminar->poster)); ?>"
width="80"
class="rounded border">

<?php else: ?>

-

<?php endif; ?>

</td>

<td><?php echo e($seminar->judul); ?></td>

<td><?php echo e($seminar->pembicara); ?></td>

<td><?php echo e(date('d M Y', strtotime($seminar->tanggal))); ?></td>

<td><?php echo e($seminar->lokasi); ?></td>

<td><?php echo e($seminar->kuota); ?></td>

<td>

<a
href="<?php echo e(route('seminar.edit',$seminar->id)); ?>"
class="btn btn-warning btn-sm">

Edit

</a>

<form
action="<?php echo e(route('seminar.destroy',$seminar->id)); ?>"
method="POST"
class="d-inline">

<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>

<button
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus seminar ini?')">

Hapus

</button>

</form>

</td>

</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

<tr>

<td colspan="9" class="text-center py-4">

Belum ada data seminar.

</td>

</tr>

<?php endif; ?>

</tbody>

</table>

</div>

</div>

<div class="mt-4 d-flex justify-content-center">

<?php echo e($seminars->links()); ?>


</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\event-seminar\resources\views/seminar/index.blade.php ENDPATH**/ ?>