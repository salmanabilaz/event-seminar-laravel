@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2>Data Seminar</h2>
        <p class="text-muted">
            Kelola data seminar
        </p>
    </div>

    <a href="{{ route('seminar.create') }}" class="btn btn-primary">
        + Tambah Seminar
    </a>

</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="card p-4 mb-4">

<form action="{{ route('seminar.index') }}" method="GET">

<div class="row g-3">

<div class="col-md-5">

<input
type="text"
name="search"
class="form-control"
placeholder="Cari judul atau pembicara..."
value="{{ request('search') }}">

</div>

<div class="col-md-3">

<select
name="kategori"
class="form-select">

<option value="">
Semua Kategori
</option>

@foreach($kategoris as $kategori)

<option
value="{{ $kategori->id }}"
{{ request('kategori') == $kategori->id ? 'selected' : '' }}>

{{ $kategori->nama_kategori }}

</option>

@endforeach

</select>

</div>

<div class="col-md-2">

<input
type="date"
name="tanggal"
class="form-control"
value="{{ request('tanggal') }}">

</div>

<div class="col-md-2 d-grid">

<button class="btn btn-primary">
Cari
</button>

<a href="{{ route('seminar.index') }}"
class="btn btn-secondary mt-2">

Reset

</a>

</div>

</div>

</form>

</div>

<div class="card p-4">

<div class="table-responsive">

<table class="table table-hover align-middle">

<thead>

<tr>

<th>No</th>
<th>Kategori</th>
<th>Poster</th>
<th>Judul</th>
<th>Pembicara</th>
<th>Tanggal</th>
<th>Lokasi</th>
<th>Kuota</th>
<th width="130">Aksi</th>

</tr>

</thead>

<tbody>

@forelse($seminars as $seminar)

<tr>

<td>{{ $seminars->firstItem() + $loop->index }}</td>

<td>{{ $seminar->kategori->nama_kategori }}</td>

<td>

@if($seminar->poster)

<img
src="{{ asset('storage/'.$seminar->poster) }}"
width="80"
class="rounded border">

@else

-

@endif

</td>

<td>{{ $seminar->judul }}</td>

<td>{{ $seminar->pembicara }}</td>

<td>{{ date('d M Y', strtotime($seminar->tanggal)) }}</td>

<td>{{ $seminar->lokasi }}</td>

<td>{{ $seminar->kuota }}</td>

<td>

<a
href="{{ route('seminar.edit',$seminar->id) }}"
class="btn btn-warning btn-sm">

Edit

</a>

<form
action="{{ route('seminar.destroy',$seminar->id) }}"
method="POST"
class="d-inline">

@csrf
@method('DELETE')

<button
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus seminar ini?')">

Hapus

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="9" class="text-center py-4">

Belum ada data seminar.

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

</div>

<div class="mt-4 d-flex justify-content-center">

{{ $seminars->links() }}

</div>

@endsection