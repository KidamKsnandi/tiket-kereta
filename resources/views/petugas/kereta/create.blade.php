@extends('layouts.petugas')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h3 class="m-0">Halaman Petugas</h3>
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
                    <form action="{{ route('kereta.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kereta</label>
                            <input type="text" name="nama_kereta" class="form-control @error('nama_kereta') is-invalid @enderror">
                            @error('nama_kereta')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jam Berangkat</label>
                            <input type="text" name="jm_berangkat" class="form-control @error('jm_berangkat') is-invalid @enderror">
                            @error('jm_berangkat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jam Tiba</label>
                            <input type="text" name="jm_tiba" class="form-control @error('jm_tiba') is-invalid @enderror">
                            @error('jm_tiba')
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
