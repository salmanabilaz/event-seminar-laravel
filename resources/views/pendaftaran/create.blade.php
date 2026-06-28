@extends('layouts.app')

@section('content')


<h2>Tambah Pendaftaran</h2>


<div class="card p-4">


<form action="{{ route('pendaftaran.store') }}"
method="POST">


@csrf



<div class="mb-3">

<label>
Peserta
</label>


<select name="peserta_id"
class="form-control">


<option value="">
-- Pilih Peserta --
</option>


@foreach($pesertas as $p)

<option value="{{ $p->id }}">

{{ $p->nama }}

</option>

@endforeach


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



@foreach($seminars as $s)


<option value="{{ $s->id }}">

{{ $s->judul }}

</option>


@endforeach


</select>

</div>




<button class="btn btn-primary">

Simpan

</button>


<a href="{{ route('pendaftaran.index') }}"
class="btn btn-secondary">

Kembali

</a>



</form>


</div>



@endsection