@extends('layouts.main')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-1o">
                <h2 class="m-0">Data Booking</h2>
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

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                             <tr>
                                <th>No</th>
                                <th>Kode Booking</th>
                                <th>Nama Pembeli</th>
                                <th>Nama Kereta</th>
                                <th>Tanggal Berangkat</th>
                                <th>Tanggal Pemesanan</th>
                                <th>Aksi</th>
                                </tr>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($booking as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->tiket->kode_booking }}</td>
                                        <td>{{ $data->tiket->pembeli->nama_pembeli }}</td>
                                        <td>{{ $data->tiket->kereta->nama_kereta }}</td>
                                        <td>{{ $data->tgl_berangkat }}</td>
                                        <td>{{ $data->tgl_pemesanan }}</td>
                                        <td>
                                        <form action="{{route('abooking.destroy',$data->id)}}" method="post">
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
