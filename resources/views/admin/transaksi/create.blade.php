@extends('layouts.main')

@section('header')
    <h4 class="page-title">Halaman Home</h4>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Masukkan Data Tiket</div>
                <div class="card-body">
                   <form action="{{route('atransaksi.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Booking</label>
                            <select style="text-transform: uppercase;" name="id_booking" class="form-control @error('id_booking') is-invalid @enderror" >
                                @foreach($booking as $data)
                                    <option style="text-transform: uppercase;" value="{{$data->id}}">{{$data->tiket->kode_booking}}</option>
                                @endforeach
                            </select>
                            @error('id_booking')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama Kasir</label>
                            <input type="text" name="nama_kasir" class="form-control @error('nama_kasir') is-invalid @enderror">
                             @error('nama_kasir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Penumpang</label>
                            <input type="number" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror">
                             @error('jumlah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror">
                             @error('harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Uang</label>
                            <input type="number" name="uang" class="form-control @error('uang') is-invalid @enderror">
                             @error('uang')
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
