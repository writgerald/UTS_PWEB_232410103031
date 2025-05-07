@extends('layouts.app')
@php
    $username = request('username');
@endphp
@section('content')
    <h2>Profil Dokter</h2>
    <div class="card">
    <div class="card-body text-center">
        <img src="{{ asset('images/hetty.png') }}" alt="Foto drg. Hetty Pratiwi" class="img-fluid rounded mb-3" style="max-width: 200px;">
    <div class="card">
        <div class="card-body">
            <h4>drg. Hetty Pratiwi</h4>
            <p>Email: hettypratiwi@gmail.com</p>
            <p>Spesialis: Dokter Gigi</p>
            <p>No. STR: 1234567890</p>
            <p>Alamat Praktek: Jl. Mangkubumi 1 No 143, Jember</p>
        </div>
    </div>
@endsection
