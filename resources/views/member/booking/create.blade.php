@extends('layouts.member')

@section('header')
    <h4 class="page-title">Booking</h4>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Masukkan Data Pembeli untuk pesan tiket</div>
                <div class="card-body">
                   <form action="{{route('booking.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">kode Booking </label>
                            <select name="id_tiket" class="form-control @error('id_tiket') is-invalid @enderror" >
                                @foreach($tiket as $data)
                                    <option value="{{$data->id}}">{{$data->kode_booking}}</option>
                                @endforeach
                            </select>
                            @error('id_tiket')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Berangkat</label>
                            <input type="date" name="tgl_berangkat" class="form-control @error('tgl_berangkat') is-invalid @enderror">
                             @error('tgl_berangkat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pemesanan</label>
                            <input type="date" name="tgl_pemesanan" class="form-control @error('tgl_pemesanan') is-invalid @enderror">
                             @error('tgl_pemesanan')
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
