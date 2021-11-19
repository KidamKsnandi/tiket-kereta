@extends('layouts.main')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-1o">
                <h2 class="m-0">Data Tiket</h2>
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
                            <th>Jumlah</th>
                            <th>Dari</th>
                            <th>Ke</th>
                            </tr>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($tiket as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->kode_booking }}</td>
                                    <td>{{ $data->pembeli->nama_pembeli }}</td>
                                    <td>{{ $data->kereta->nama_kereta }}</td>
                                    <td>{{ $data->jumlah }}</td>
                                    <td>{{ $data->dari }}</td>
                                    <td>{{ $data->ke }}</td>
                                    <td>
                                         <form action="{{route('atiket.destroy',$data->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="{{route('atiket.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
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
