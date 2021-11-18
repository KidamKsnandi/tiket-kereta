@extends('layouts.member')
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
                   <form action="{{route('atiket.update',$tiket->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Kode Booking</label>
                            <input type="text" name="kode_booking" value="{{$tiket->kode_booking}}" class="form-control @error('kode_booking') is-invalid @enderror">
                            @error('kode_booking')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pembeli</label>
                            <select name="id_pembeli" class="form-control @error('id_pembeli') is-invalid @enderror" >
                                @foreach($pembeli as $data)
                                    <option value="{{$data->id}}" {{$data->id == $data->id_pembeli ? 'selected="selected"' : '' }}>{{$data->nama_pembeli}}</option>
                                @endforeach
                            </select>
                            @error('id_pembeli')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama Kereta</label>
                            <select name="id_kereta" class="form-control @error('id_kereta') is-invalid @enderror" >
                                @foreach($kereta as $data)
                                    <option value="{{$data->id}}" {{$data->id == $data->id_kereta ? 'selected="selected"' : '' }}>{{$data->nama_kereta}}</option>
                                @endforeach
                            </select>
                            @error('id_kereta')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="number" name="jumlah" value="{{$tiket->jumlah}}" class="form-control @error('jumlah') is-invalid @enderror">
                             @error('jumlah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Dari</label>
                            <select name="dari" class="form-control @error('dari') is-invalid @enderror" >
                                <option value="{{$tiket->dari}}">{{$tiket->dari}}</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Surabaya">Surabaya</option>
                                <option value="Bengkulu">Bengkulu</option>
                                <option value="Yogyakarta">Yogyakarta</option>
                                <option value="Makassar">Makassar</option>
                                <option value="Manado">Manado</option>
                                <option value="Pontianak">Pontianak</option>
                                <option value="Semarang">Semarang</option>
                                <option value="Denpasar">Denpasar</option>
                            </select>
                            @error('dari')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Ke</label>
                            <select name="ke" class="form-control @error('ke') is-invalid @enderror" >
                                <option value="{{$tiket->ke}}">{{$tiket->ke}}</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Surabaya">Surabaya</option>
                                <option value="Bengkulu">Bengkulu</option>
                                <option value="Yogyakarta">Yogyakarta</option>
                                <option value="Makassar">Makassar</option>
                                <option value="Manado">Manado</option>
                                <option value="Pontianak">Pontianak</option>
                                <option value="Semarang">Semarang</option>
                                <option value="Denpasar">Denpasar</option>
                            </select>
                            @error('ke')
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
