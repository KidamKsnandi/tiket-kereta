@extends('layouts.member')
@section('header')
    <h4 class="page-title">Transaksi</h4>
@endsection

@section('content')

    @php
    $no = 1;
    @endphp
        @foreach ($kasir as $data)

<div class="card">
    <h5 class="card-header bg-success text-white">Transaksi</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-9">
                <h5>
<table>
    <tr>
        <td width="150">Kode Booking</td><td>:</td><td>{{ $data->booking->tiket->kode_booking }}</td>
    </tr>
    <tr>
        <td>Nama Pembeli</td><td>:</td><td>{{ $data->booking->tiket->pembeli->nama_pembeli }}</td>
    </tr>
    <tr>
        <td>No Telepon</td><td>:</td><td>{{ $data->booking->tiket->pembeli->no_telp }}</td>
    </tr>
    <tr>
        <td>Kelas</td><td>:</td><td>{{ $data->booking->tiket->pembeli->kelas->nama_kelas }}</td>
    </tr>
    <tr>
        <td>Nama Kereta</td><td>:</td><td>{{ $data->booking->tiket->kereta->nama_kereta }}</td>
    </tr>
    <tr>
        <td>Jumlah Penumpang</td><td>:</td><td>{{ $data->jumlah }}</td>
    </tr>
    <tr>
        <td>Harga</td><td>:</td><td>{{ $data->harga }}</td>
    </tr>
    <tr>
        <td>Uang</td><td>:</td><td>{{ $data->uang }}</td>
    </tr>
    <tr>
        <td>Kembalian</td><td>:</td><td>{{ $data->kembalian }}</td>
    </tr>
</table></h5></div>
<div class="col-sm-3">
    <h3>Total : <b>{{ $data->total_harga }}</b></h3>
</div>
<div class="col-sm-3"></div>
</div>
<div class="row">
    <div class="col-sm-9"></div>
    <div class="col-sm-3" style="text-align: right;">Nama Kasir : <b> {{ $data->nama_kasir }}</b></div>
</div>
    </div>
  </div>

  @endforeach

@endsection
