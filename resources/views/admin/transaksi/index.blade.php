@extends('layouts.main')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-1o">
                <h2 class="m-0">Data Transaksi</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{route('atransaksi.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Transaksi</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Kode Booking</th>
                            <th>Nama Kasir</th>
                            <th>Jumlah Penumpang</th>
                            <th>Harga</th>
                            <th>Total Harga</th>
                            <th>Uang</th>
                            <th>Kembalian</th>
                            </tr>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($kasir as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->booking->tiket->kode_booking }}</td>
                                    <td>{{ $data->nama_kasir }}</td>
                                    <td>{{ $data->jumlah }}</td>
                                    <td>{{ $data->harga }}</td>
                                    <td>{{ $data->total_harga }}</td>
                                    <td>{{ $data->uang }}</td>
                                    <td>{{ $data->kembalian }}</td>
                                    <td>
                                         <form action="{{route('atransaksi.destroy',$data->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
