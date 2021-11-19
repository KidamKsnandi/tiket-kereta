@extends('layouts.petugas')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-1o">
                <h2 class="m-0">Data Kereta</h2>
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
                    <a href="{{route('kereta.create')}}" class="btn btn-sm btn-info float-right text-white">Tambah Data Kereta</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Kereta</th>
                                <th>Jam Berangkat</th>
                                <th>Jam Tiba</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($kereta as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_kereta }}</td>
                                <td>{{ $data->jm_berangkat }}</td>
                                <td>{{ $data->jm_tiba }}</td>
                                <td>
                                    <form action="{{ route('kereta.destroy', $data->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <a href="{{ route('kereta.edit', $data->id) }}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{ route('kereta.show', $data->id) }}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</button>
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
