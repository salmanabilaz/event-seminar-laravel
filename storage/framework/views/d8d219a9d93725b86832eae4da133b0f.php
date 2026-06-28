

<?php $__env->startSection('content'); ?>


<div class="d-flex justify-content-between align-items-center mb-4">

<div>

<h2>Data Pendaftaran</h2>

<p class="text-muted">
Kelola pendaftaran seminar
</p>

</div>


<a href="<?php echo e(route('pendaftaran.create')); ?>"
class="btn btn-primary">

+ Tambah Pendaftaran

</a>


</div>



<div class="card p-4">


<table class="table align-middle">


<thead>

<tr>

<th>No</th>
<th>Peserta</th>
<th>Seminar</th>
<th>Tanggal Daftar</th>
<th>Aksi</th>

</tr>

</thead>



<tbody>


<?php $__empty_1 = true; $__currentLoopData = $pendaftarans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


<tr>


<td>
<?php echo e($pendaftarans->firstItem() + $loop->index); ?>

</td>


<td>
<?php echo e($item->peserta->nama); ?>

</td>


<td>
<?php echo e($item->seminar->judul); ?>

</td>


<td>
<?php echo e($item->tanggal_daftar); ?>

</td>



<td>


<form action="<?php echo e(route('pendaftaran.destroy',$item->id)); ?>"
method="POST">


<?php echo csrf_field(); ?>

<?php echo method_field('DELETE'); ?>


<button 
class="btn btn-danger btn-sm"
onclick="return confirm('Hapus pendaftaran?')">

Hapus

</button>


</form>


</td>


</tr>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

<tr>

<td colspan="5" class="text-center">

Belum ada pendaftaran

</td>

</tr>


<?php endif; ?>


</tbody>


</table>


</div>



<div class="mt-4 d-flex justify-content-center">

<?php echo e($pendaftarans->links()); ?>


</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\event-seminar\resources\views/pendaftaran/index.blade.php ENDPATH**/ ?>