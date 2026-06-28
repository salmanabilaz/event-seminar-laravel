

<?php $__env->startSection('content'); ?>


<div class="d-flex justify-content-between align-items-center mb-4">


<div>

<h2>Data Peserta</h2>

<p class="text-muted">
Kelola data peserta seminar
</p>

</div>



<a href="<?php echo e(route('peserta.create')); ?>"
class="btn btn-primary">

+ Tambah Peserta

</a>


</div>




<?php if(session('success')): ?>

<div class="alert alert-success">

<?php echo e(session('success')); ?>


</div>

<?php endif; ?>




<div class="card p-4">


<table class="table align-middle">


<thead>

<tr>

<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>No HP</th>
<th>Aksi</th>

</tr>

</thead>



<tbody>


<?php $__empty_1 = true; $__currentLoopData = $pesertas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


<tr>


<td>
<?php echo e($pesertas->firstItem() + $loop->index); ?>

</td>


<td><?php echo e($item->nama); ?></td>

<td><?php echo e($item->email); ?></td>

<td><?php echo e($item->no_hp); ?></td>



<td>


<a href="<?php echo e(route('peserta.edit',$item->id)); ?>"
class="btn btn-warning btn-sm">

Edit

</a>




<form action="<?php echo e(route('peserta.destroy',$item->id)); ?>"
method="POST"
class="d-inline">


<?php echo csrf_field(); ?>

<?php echo method_field('DELETE'); ?>



<button 
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin hapus data ini?')">

Hapus

</button>


</form>


</td>


</tr>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>


<tr>

<td colspan="5" class="text-center">

Belum ada peserta

</td>

</tr>


<?php endif; ?>


</tbody>


</table>


</div>



<div class="mt-4 d-flex justify-content-center">

<?php echo e($pesertas->links()); ?>


</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\event-seminar\resources\views/peserta/index.blade.php ENDPATH**/ ?>