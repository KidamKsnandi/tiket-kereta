@extends('layouts.member')

@section('header')
    <h4 class="page-title">Halaman Home</h4>
@endsection

@section('content')
    <h2>SELAMAT DATANG,
        {{ Auth::user()->name }}
    </h2>
@endsection


