@extends('layouts.main')
@section('header')
    <h4 class="page-title">Halaman Admin</h4>
@endsection

@section('content')
    <div class="content text-center text-dark">
            <h1>SELAMAT DATANG,  {{ Auth::user()->name }}</h1>
        </div>
@endsection
