

<?php $__env->startSection('content'); ?>


<h2>Tambah Pendaftaran</h2>


<div class="card p-4">


<form action="<?php echo e(route('pendaftaran.store')); ?>"
method="POST">


<?php echo csrf_field(); ?>



<div class="mb-3">

<label>
Peserta
</label>


<select name="peserta_id"
class="form-control">


<option value="">
-- Pilih Peserta --
</option>


<?php $__currentLoopData = $pesertas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<option value="<?php echo e($p->id); ?>">

<?php echo e($p->nama); ?>


</option>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</select>

</div>




<div class="mb-3">

<label>
Seminar
</label>


<select name="seminar_id"
class="form-control">


<option value="">
-- Pilih Seminar --
</option>



<?php $__currentLoopData = $seminars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<option value="<?php echo e($s->id); ?>">

<?php echo e($s->judul); ?>


</option>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</select>

</div>




<button class="btn btn-primary">

Simpan

</button>


<a href="<?php echo e(route('pendaftaran.index')); ?>"
class="btn btn-secondary">

Kembali

</a>



</form>


</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\event-seminar\resources\views/pendaftaran/create.blade.php ENDPATH**/ ?>