@extends('layouts.member')

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
                   <form action="{{route('tiket.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Booking</label>
                            <input type="text" name="kode_booking" class="form-control @error('kode_booking') is-invalid @enderror">
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
                                    <option value="{{$data->id}}">{{$data->nama_pembeli}}</option>
                                @endforeach
                            </select>
                            @error('id_kereta')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Kereta</label>
                            <select name="id_kereta" class="form-control @error('id_kereta') is-invalid @enderror" >
                                @foreach($kereta as $data)
                                    <option value="{{$data->id}}">{{$data->nama_kereta}}</option>
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
                            <input type="number" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror">
                             @error('jumlah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row g-3">
                              <div class="col">
                        <div class="form-group">
                            <select name="dari" class="form-control @error('dari') is-invalid @enderror" >
                                    <option value="">Dari</option>
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
                              </div>
                                <div class="col">
                        <div class="form-group">
                            <select name="ke" class="form-control @error('ke') is-invalid @enderror" >
                                    <option value="">Ke</option>
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
                                </div>
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
