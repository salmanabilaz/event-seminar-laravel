

<?php $__env->startSection('content'); ?>


<h2>Dashboard</h2>


<div class="row mt-4">


<div class="col-md-4">

<div class="card p-4">

<h5>Total Seminar</h5>

<h2>
<?php echo e($totalSeminar); ?>

</h2>

</div>

</div>



<div class="col-md-4">

<div class="card p-4">

<h5>Total Peserta</h5>

<h2>
<?php echo e($totalPeserta); ?>

</h2>

</div>

</div>



<div class="col-md-4">

<div class="card p-4">

<h5>Total Pendaftaran</h5>

<h2>
<?php echo e($totalPendaftaran); ?>

</h2>

</div>

</div>



</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\event-seminar\resources\views/dashboard.blade.php ENDPATH**/ ?>