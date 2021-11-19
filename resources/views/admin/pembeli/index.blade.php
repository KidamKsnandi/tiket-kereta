@extends('layouts.main')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-1o">
                <h2 class="m-0">Data Pembeli</h2>
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
                                <th>Nama Pembeli</th>
                                <th>Alamat</th>
                                <th>No. Telpon</th>
                                <th>Kelas</th>
                                </tr>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($pembeli as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_pembeli }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->no_telp }}</td>
                                        <td>{{ $data->kelas->nama_kelas }}</td>
                                        <td>
                                        <form action="{{route('apembeli.destroy',$data->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="{{route('apembeli.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
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
