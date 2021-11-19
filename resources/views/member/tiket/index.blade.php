@extends('layouts.member')
@section('header')
    <h4 class="page-title">Data Tiket</h4>
@endsection

@section('content')

    @php
    $no = 1;
    @endphp
        @foreach ($tiket as $data)

<div class="card">
    <h5 class="card-header">Tiket Kereta</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-9">
                <h5>
<table>
    <tr>
        <td width="110">Kode Booking</td><td>:</td><td><div style="text-transform: uppercase;">{{ $data->kode_booking }}</div></td>
    </tr>
    <tr>
        <td>Nama Pembeli</td><td>:</td><td>{{ $data->pembeli->nama_pembeli }}</td>
    </tr>
    <tr>
        <td>Nama Kereta</td><td>:</td><td>{{ $data->kereta->nama_kereta }}</td>
    </tr>
    <tr>
        <td>Jumlah</td><td>:</td><td>{{ $data->jumlah }}</td>
    </tr>
    <tr>
        <td>Dari</td><td>:</td><td>{{ $data->dari }}</td>
    </tr>
    <tr>
        <td>Ke</td><td>:</td><td>{{ $data->ke }}</td>
    </tr>
</table>
    </h5>
</div>
<div class="col-sm-3">
    <form action="{{route('tiket.destroy',$data->id)}}" method="post">
    @method('delete')
    @csrf
    <a href="booking/create" class="btn btn-warning">Booking</a></div>
<div class="col-sm-3"><br>
    <button type="submit" class="btn btn-danger text-white" onclick="return confirm('Apakah anda yakin Membatalkan Pesanan?');">Batalkan Pemesanan</button>
</div>
    </form>
</div>
    </div>
  </div>

  @endforeach

@endsection

