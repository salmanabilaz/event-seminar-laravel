@extends('layouts.app')

@section('content')


<div class="mb-4">

<h2>Tambah Peserta</h2>

<p class="text-muted">
Tambah data peserta seminar
</p>

</div>




<div class="card p-4">


<form action="{{ route('peserta.store') }}" method="POST">

@csrf



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


<a href="{{ route('peserta.index') }}"
class="btn btn-secondary">

Kembali

</a>



</form>


</div>


@endsection