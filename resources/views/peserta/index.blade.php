@extends('layouts.app')

@section('content')


<div class="d-flex justify-content-between align-items-center mb-4">


<div>

<h2>Data Peserta</h2>

<p class="text-muted">
Kelola data peserta seminar
</p>

</div>



<a href="{{ route('peserta.create') }}"
class="btn btn-primary">

+ Tambah Peserta

</a>


</div>




@if(session('success'))

<div class="alert alert-success">

{{ session('success') }}

</div>

@endif




<div class="card p-4">


<table class="table align-middle">


<thead>

<tr>

<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>No HP</th>
<th>Aksi</th>

</tr>

</thead>



<tbody>


@forelse($pesertas as $item)


<tr>


<td>
{{ $pesertas->firstItem() + $loop->index }}
</td>


<td>{{ $item->nama }}</td>

<td>{{ $item->email }}</td>

<td>{{ $item->no_hp }}</td>



<td>


<a href="{{ route('peserta.edit',$item->id) }}"
class="btn btn-warning btn-sm">

Edit

</a>




<form action="{{ route('peserta.destroy',$item->id) }}"
method="POST"
class="d-inline">


@csrf

@method('DELETE')



<button 
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin hapus data ini?')">

Hapus

</button>


</form>


</td>


</tr>


@empty


<tr>

<td colspan="5" class="text-center">

Belum ada peserta

</td>

</tr>


@endforelse


</tbody>


</table>


</div>



<div class="mt-4 d-flex justify-content-center">

{{ $pesertas->links() }}

</div>



@endsection