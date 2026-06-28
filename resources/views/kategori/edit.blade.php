@extends('layouts.app')

@section('content')


<div class="mb-4">

<h2>Edit Kategori Seminar</h2>

<p class="text-muted">
Ubah data kategori
</p>

</div>



<div class="card p-4">



<form action="{{ route('kategori.update',$kategoriseminar->id) }}" method="POST">


@csrf

@method('PUT')



<div class="mb-3">

<label class="form-label">
Nama Kategori
</label>


<input type="text"
name="nama_kategori"
class="form-control"
value="{{ $kategoriseminar->nama_kategori }}">


</div>





<div class="mb-3">

<label class="form-label">
Deskripsi
</label>


<textarea 
name="deskripsi"
class="form-control"
rows="4">{{ $kategoriseminar->deskripsi }}</textarea>


</div>




<button class="btn btn-primary">
Update
</button>


<a href="{{ route('kategori.index') }}"
class="btn btn-secondary">

Kembali

</a>



</form>



</div>



@endsection