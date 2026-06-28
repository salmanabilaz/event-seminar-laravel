@extends('layouts.app')

@section('content')


<div class="mb-4">

<h2>Edit Peserta</h2>

<p class="text-muted">
Ubah data peserta
</p>

</div>




<div class="card p-4">


<form action="{{ route('peserta.update',$peserta->id) }}" method="POST">


@csrf

@method('PUT')




<div class="mb-3">

<label class="form-label">
Nama Peserta
</label>


<input type="text"
name="nama"
class="form-control"
value="{{ $peserta->nama }}">


</div>





<div class="mb-3">

<label class="form-label">
Email
</label>


<input type="email"
name="email"
class="form-control"
value="{{ $peserta->email }}">


</div>





<div class="mb-3">

<label class="form-label">
No HP
</label>


<input type="text"
name="no_hp"
class="form-control"
value="{{ $peserta->no_hp }}">


</div>





<button class="btn btn-primary">
Update
</button>


<a href="{{ route('peserta.index') }}"
class="btn btn-secondary">

Kembali

</a>



</form>


</div>


@endsection