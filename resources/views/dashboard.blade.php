@extends('layouts.app')

@section('content')


<h2>Dashboard</h2>


<div class="row mt-4">


<div class="col-md-4">

<div class="card p-4">

<h5>Total Seminar</h5>

<h2>
{{ $totalSeminar }}
</h2>

</div>

</div>



<div class="col-md-4">

<div class="card p-4">

<h5>Total Peserta</h5>

<h2>
{{ $totalPeserta }}
</h2>

</div>

</div>



<div class="col-md-4">

<div class="card p-4">

<h5>Total Pendaftaran</h5>

<h2>
{{ $totalPendaftaran }}
</h2>

</div>

</div>



</div>


@endsection