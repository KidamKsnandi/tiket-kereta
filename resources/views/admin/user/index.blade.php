@extends('layouts.main')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-1o">
                <h2 class="m-0">Data User</h2>
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
                Data Pembeli
                <a href="{{route('pembeli.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Penulis</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Aksi</th>
                            </tr>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($user as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>
                                         <form action="{{route('user.destroy',$data->id)}}" method="post">
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
    {{-- <table border=1>
       <tr>
          <th>No</th>
          <th>Username</th>
          <th>Email</th>
          <th>Aksi</th>
        </tr>
            @php
                $no = 1;
            @endphp
            @foreach ($user as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>
                    <form action="{{route('tiket.destroy',$data->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <a href="{{route('pembeli.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                    </form></td>
            </tr>
            @endforeach
    </table> --}}
@endsection

