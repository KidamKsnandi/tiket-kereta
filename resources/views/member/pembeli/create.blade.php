@extends('layouts.member')

@section('header')
    <h4 class="page-title">Halaman Home</h4>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Masukkan Data Pembeli untuk pesan tiket</div>
                <div class="card-body">
                   <form action="{{route('pembeli.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Pembeli</label>
                            <input type="text" name="nama_pembeli" class="form-control @error('nama_pembeli') is-invalid @enderror">
                             @error('nama_pembeli')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror">
                             @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">No. Telpon</label>
                            <input type="number" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror">
                             @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Kelas </label>
                            <select name="id_kelas" class="form-control @error('id_kelas') is-invalid @enderror" >
                                @foreach($kelas as $data)
                                    <option value="{{$data->id}}">{{$data->nama_kelas}}</option>
                                @endforeach
                            </select>
                            @error('id_kelas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-danger text-white">Reset</button>
                            <button type="submit" class="btn btn-info text-white">Simpan</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
