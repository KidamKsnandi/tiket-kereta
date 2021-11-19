@extends('layouts.member')

@section('header')
    <h4 class="page-title">Halaman User</h4>
@endsection

@section('content')
<br><br><br><br>
<center>
    <h1>SELAMAT DATANG, {{ Auth::user()->name }}</h1>
    <h3>Silahkan Klik Untuk Memesan</h3>
    <a href="pembeli/create" class="btn btn-info text-white col-sm-2">Pesan Sekarang</a>
    </center>
@endsection
