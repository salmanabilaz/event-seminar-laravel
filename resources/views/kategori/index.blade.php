@extends('layouts.app')

@section('content')


<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2>Kategori Seminar</h2>
        <p class="text-muted">
            Kelola kategori seminar
        </p>
    </div>


    <a href="{{ route('kategori.create') }}" 
       class="btn btn-primary">
        + Tambah Kategori
    </a>

</div>



<div class="card p-4">


<table class="table align-middle">


<thead>

<tr>
<th>No</th>
<th>Nama Kategori</th>
<th>Deskripsi</th>
<th>Aksi</th>
</tr>

</thead>



<tbody>


@forelse($kategoriseminars as $item)


<tr>

<td>
{{ $loop->iteration }}
</td>


<td>
{{ $item->nama_kategori }}
</td>


<td>
{{ $item->deskripsi }}
</td>



<td>


<a href="{{ route('kategori.edit',$item->id) }}"
class="btn btn-warning btn-sm">

Edit

</a>




<form action="{{ route('kategori.destroy',$item->id) }}"
method="POST"
class="d-inline">


@csrf

@method('DELETE')


<button class="btn btn-danger btn-sm"
onclick="return confirm('Hapus data?')">

Hapus

</button>


</form>



</td>


</tr>



@empty


<tr>

<td colspan="4" class="text-center">

Belum ada data kategori

</td>


</tr>


@endforelse



</tbody>


</table>


</div>


@endsection