@extends('layouts.petugas')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Kereta</h1>
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
                <div class="card-header">Data Kereta</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Kereta</label>
                        <input type="text" name="nama_kereta" value="{{ $kereta->nama_kereta }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jam Berangkat</label>
                        <input type="text" name="jm_berangkat" value="{{ $kereta->jm_berangkat }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jam Tiba</label>
                        <input type="text" name="jm_tiba" value="{{ $kereta->jm_tiba }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{ url('/petugas/kereta') }}" class="btn btn-block btn-info form-control text-white">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
