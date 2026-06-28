

<?php $__env->startSection('content'); ?>


<div class="mb-4">

<h2>Tambah Peserta</h2>

<p class="text-muted">
Tambah data peserta seminar
</p>

</div>




<div class="card p-4">


<form action="<?php echo e(route('peserta.store')); ?>" method="POST">

<?php echo csrf_field(); ?>



<div class="mb-3">

<label class="form-label">
Nama Peserta
</label>


<input type="text"
name="nama"
class="form-control"
placeholder="Nama peserta">


</div>




<div class="mb-3">

<label class="form-label">
Email
</label>


<input type="email"
name="email"
class="form-control"
placeholder="Email peserta">


</div>





<div class="mb-3">

<label class="form-label">
No HP
</label>


<input type="text"
name="no_hp"
class="form-control"
placeholder="Nomor HP">


</div>





<button class="btn btn-primary">
Simpan
</button>


<a href="<?php echo e(route('peserta.index')); ?>"
class="btn btn-secondary">

Kembali

</a>



</form>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\event-seminar\resources\views/peserta/create.blade.php ENDPATH**/ ?>