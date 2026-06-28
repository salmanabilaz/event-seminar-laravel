@extends('layouts.app')

@section('content')

<div class="mb-4">

    <h2>Edit Pendaftaran</h2>

    <p class="text-muted">
        Ubah data pendaftaran seminar.
    </p>

</div>



<div class="card p-4">

<form action="{{ route('pendaftaran.update', $pendaftaran->id) }}" method="POST">

@csrf
@method('PUT')



<div class="mb-3">

<label class="form-label">
Peserta
</label>

<select name="peserta_id" class="form-select" required>

@foreach($pesertas as $peserta)

<option value="{{ $peserta->id }}"
{{ $pendaftaran->peserta_id == $peserta->id ? 'selected' : '' }}>

{{ $peserta->nama }}

</option>

@endforeach

</select>

</div>




<div class="mb-3">

<label class="form-label">
Seminar
</label>

<select name="seminar_id" class="form-select" required>

@foreach($seminars as $seminar)

<option value="{{ $seminar->id }}"
{{ $pendaftaran->seminar_id == $seminar->id ? 'selected' : '' }}>

{{ $seminar->judul }}

</option>

@endforeach

</select>

</div>




<div class="mb-3">

<label class="form-label">
Tanggal Daftar
</label>

<input
type="datetime-local"
name="tanggal_daftar"
class="form-control"
value="{{ \Carbon\Carbon::parse($pendaftaran->tanggal_daftar)->format('Y-m-d\TH:i') }}"
required>

</div>




<div class="d-flex gap-2">

<button type="submit" class="btn btn-primary">
Update
</button>

<a href="{{ route('pendaftaran.index') }}"
class="btn btn-secondary">
Kembali
</a>

</div>


</form>

</div>

@endsection