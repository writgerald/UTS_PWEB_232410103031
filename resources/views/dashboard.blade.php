@extends('layouts.app')

@section('content')
    <h1>Selamat datang, {{ $username }}!</h1>
    <img src="{{ asset('images/hetty.png') }}" alt="Foto drg. Hetty Pratiwi" class="img-fluid rounded mb-3" style="max-width: 400px;">
    <p>Ini adalah halaman dashboard Klinik Hetty.</p>

<p>Berikut adalah jadwal praktik Anda:</p>

<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th>Hari</th>
            <th>Jam</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jadwal as $item)
        <tr>
            <td>{{ $item['hari'] }}</td>
            <td>{{ $item['jam'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<h3>Jadwal Pasien Hari Ini</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Keluhan</th>
            <th>Waktu Kunjungan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($patients as $index => $patient)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $patient['name'] }}</td>
                <td>{{ $patient['complaint'] }}</td>
                <td>{{ $patient['appointment'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="links">
    <a href="#">Go Back To Top</a>
</div>
@endsection
