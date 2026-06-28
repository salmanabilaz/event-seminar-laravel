@extends('layouts.app')

@section('content')

<div class="mb-4">

    <h2>Edit Seminar</h2>

    <p class="text-muted">
        Ubah data seminar
    </p>

</div>

<div class="card p-4">

<form action="{{ route('seminar.update', $seminar->id) }}"
      method="POST"
      enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="mb-3">

<label class="form-label">
Kategori Seminar
</label>

<select name="kategori_id" class="form-select" required>

@foreach($kategori as $item)

<option value="{{ $item->id }}"
{{ $seminar->kategori_id == $item->id ? 'selected' : '' }}>

{{ $item->nama_kategori }}

</option>

@endforeach

</select>

</div>



<div class="mb-3">

<label class="form-label">
Judul Seminar
</label>

<input
type="text"
name="judul"
class="form-control"
value="{{ old('judul', $seminar->judul) }}"
required>

</div>



<div class="mb-3">

<label class="form-label">
Pembicara
</label>

<input
type="text"
name="pembicara"
class="form-control"
value="{{ old('pembicara', $seminar->pembicara) }}"
required>

</div>



<div class="mb-3">

<label class="form-label">
Tanggal
</label>

<input
type="date"
name="tanggal"
class="form-control"
value="{{ old('tanggal', $seminar->tanggal) }}"
required>

</div>



<div class="mb-3">

<label class="form-label">
Lokasi
</label>

<input
type="text"
name="lokasi"
class="form-control"
value="{{ old('lokasi', $seminar->lokasi) }}"
required>

</div>



<div class="mb-3">

<label class="form-label">
Kuota
</label>

<input
type="number"
name="kuota"
class="form-control"
min="1"
value="{{ old('kuota', $seminar->kuota) }}"
required>

</div>



<div class="mb-3">

<label class="form-label">
Poster Saat Ini
</label>

<br>

@if($seminar->poster)

<img src="{{ asset('storage/'.$seminar->poster) }}"
     width="150"
     class="rounded border mb-3">

@endif

</div>



<div class="mb-4">

<label class="form-label">
Ganti Poster (Opsional)
</label>

<input
type="file"
name="poster"
class="form-control"
accept=".jpg,.jpeg,.png">

<div class="form-text">
Kosongkan jika tidak ingin mengganti poster.
</div>

</div>



<button class="btn btn-primary">
Update
</button>

<a href="{{ route('seminar.index') }}"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

@endsection