@extends('layouts.main')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data</h1>
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
                <div class="card-header">Data Buku</div>
                <div class="card-body">
                   <form action="{{route('apembeli.update',$pembeli->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Nama Pembeli</label>
                            <input type="text" name="nama_pembeli" value="{{$pembeli->nama_pembeli}}" class="form-control @error('nama_pembeli') is-invalid @enderror">
                            @error('nama_pembeli')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" value="{{$pembeli->alamat}}" class="form-control @error('alamat') is-invalid @enderror">
                             @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">No Telpon</label>
                            <input type="text" name="no_telp" value="{{$pembeli->no_telp}}" class="form-control @error('no_telp') is-invalid @enderror">
                             @error('no_telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Kelas</label>
                            <select name="id_kelas" class="form-control @error('kelas') is-invalid @enderror" >
                                @foreach($kelas as $data)
                                    <option value="{{$data->id}}" {{$data->id == $pembeli->id_kelas ? 'selected="selected"' : '' }}>{{$data->nama_kelas}}</option>
                                @endforeach
                            </select>
                            @error('kelas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
