@extends('layouts.app')

@section('content')

<div class="mb-4">

    <h2>Tambah Seminar</h2>

    <p class="text-muted">
        Tambah data seminar baru
    </p>

</div>

<div class="card p-4">

<form action="{{ route('seminar.store') }}"
      method="POST"
      enctype="multipart/form-data">

@csrf

<div class="mb-3">

<label class="form-label">
Kategori Seminar
</label>

<select name="kategori_id" class="form-select" required>

<option value="">-- Pilih Kategori --</option>

@foreach($kategori as $item)

<option value="{{ $item->id }}">

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
value="{{ old('judul') }}"
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
value="{{ old('pembicara') }}"
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
value="{{ old('tanggal') }}"
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
value="{{ old('lokasi') }}"
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
value="{{ old('kuota') }}"
required>

</div>



<div class="mb-4">

<label class="form-label">
Poster Seminar
</label>

<input
type="file"
name="poster"
class="form-control"
accept=".jpg,.jpeg,.png"
required>

<div class="form-text">
Format: JPG, JPEG, atau PNG (maks. 2 MB)
</div>

</div>



<button class="btn btn-primary">
Simpan
</button>

<a href="{{ route('seminar.index') }}"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

@endsection