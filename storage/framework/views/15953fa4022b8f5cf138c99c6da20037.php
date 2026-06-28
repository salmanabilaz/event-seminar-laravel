

<?php $__env->startSection('content'); ?>


<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2>Kategori Seminar</h2>
        <p class="text-muted">
            Kelola kategori seminar
        </p>
    </div>


    <a href="<?php echo e(route('kategori.create')); ?>" 
       class="btn btn-primary">
        + Tambah Kategori
    </a>

</div>



<div class="card p-4">


<table class="table align-middle">


<thead>

<tr>
<th>No</th>
<th>Nama Kategori</th>
<th>Deskripsi</th>
<th>Aksi</th>
</tr>

</thead>



<tbody>


<?php $__empty_1 = true; $__currentLoopData = $kategoriseminars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


<tr>

<td>
<?php echo e($loop->iteration); ?>

</td>


<td>
<?php echo e($item->nama_kategori); ?>

</td>


<td>
<?php echo e($item->deskripsi); ?>

</td>



<td>


<a href="<?php echo e(route('kategori.edit',$item->id)); ?>"
class="btn btn-warning btn-sm">

Edit

</a>




<form action="<?php echo e(route('kategori.destroy',$item->id)); ?>"
method="POST"
class="d-inline">


<?php echo csrf_field(); ?>

<?php echo method_field('DELETE'); ?>


<button class="btn btn-danger btn-sm"
onclick="return confirm('Hapus data?')">

Hapus

</button>


</form>



</td>


</tr>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>


<tr>

<td colspan="4" class="text-center">

Belum ada data kategori

</td>


</tr>


<?php endif; ?>



</tbody>


</table>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\event-seminar\resources\views/kategori/index.blade.php ENDPATH**/ ?>