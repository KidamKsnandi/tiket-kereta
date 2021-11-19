@extends('layouts.member')
@section('header')
    <h4 class="page-title">Halaman Booking</h4>
@endsection


@section('content')

    @php
    $no = 1;
    @endphp
        @foreach ($booking as $data)

<div class="card">
    <h5 class="card-header bg-warning text-white">Data Booking</h5>
    <div class="card-body">
        <div class="row">
        <div class="col-sm-6">
            <h5>
<table>
    <tr>
        <td>Nama Pembeli</td><td>:</td><td>{{ $data->tiket->pembeli->nama_pembeli }}</td>
    </tr>
    <tr>
        <td>No Telepon</td><td>:</td><td>{{ $data->tiket->pembeli->no_telp }}</td>
    </tr>
    <tr>
        <td>Nama Kereta</td><td>:</td><td>{{ $data->tiket->kereta->nama_kereta }}</td>
    </tr>
    <tr>
        <td>Dari</td><td>:</td><td>{{ $data->tiket->dari }}</td>
    </tr>
    <tr>
        <td>Ke</td><td>:</td><td>{{ $data->tiket->ke }}</td>
    </tr>
    <tr>
        <td>Jam Berangkat</td><td>:</td><td>{{ $data->tiket->kereta->jm_berangkat }}</td>
    </tr>
    <tr>
        <td>Jam Tiba</td><td>:</td><td>{{ $data->tiket->kereta->jm_tiba }}</td>
    </tr>
</table></h5></div>
<div class="col-sm-6"><h3> Kode Booking : <b style="text-transform: uppercase;">{{ $data->tiket->kode_booking }}</b></h3></div>
</div>
</div>
</div>

  @endforeach

@endsection
