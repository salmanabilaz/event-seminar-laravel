@extends('layouts.app')

@section('content')


<div class="d-flex justify-content-between align-items-center mb-4">

<div>

<h2>Data Pendaftaran</h2>

<p class="text-muted">
Kelola pendaftaran seminar
</p>

</div>


<a href="{{ route('pendaftaran.create') }}"
class="btn btn-primary">

+ Tambah Pendaftaran

</a>


</div>



<div class="card p-4">


<table class="table align-middle">


<thead>

<tr>

<th>No</th>
<th>Peserta</th>
<th>Seminar</th>
<th>Tanggal Daftar</th>
<th>Aksi</th>

</tr>

</thead>



<tbody>


@forelse($pendaftarans as $item)


<tr>


<td>
{{ $pendaftarans->firstItem() + $loop->index }}
</td>


<td>
{{ $item->peserta->nama }}
</td>


<td>
{{ $item->seminar->judul }}
</td>


<td>
{{ $item->tanggal_daftar }}
</td>



<td>


<form action="{{ route('pendaftaran.destroy',$item->id) }}"
method="POST">


@csrf

@method('DELETE')


<button 
class="btn btn-danger btn-sm"
onclick="return confirm('Hapus pendaftaran?')">

Hapus

</button>


</form>


</td>


</tr>



@empty

<tr>

<td colspan="5" class="text-center">

Belum ada pendaftaran

</td>

</tr>


@endforelse


</tbody>


</table>


</div>



<div class="mt-4 d-flex justify-content-center">

{{ $pendaftarans->links() }}

</div>



@endsection