@extends('layouts.app')

@section('content')
@php
    $username = request('username');
@endphp
<h2>Form Tambah Janji Temu</h2>

<form>
    <div class="mb-3">
        <label for="namaPasien" class="form-label">Nama Pasien</label>
        <input type="text" class="form-control" id="namaPasien" placeholder="Contoh: Siti Aminah" required>
    </div>
    <div class="mb-3">
        <label for="keluhan" class="form-label">Keluhan</label>
        <textarea class="form-control" id="keluhan" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="jadwal" class="form-label">Pilih Jadwal</label>
        <select class="form-select" id="jadwal" required>
            <option>Senin - 08:00</option>
            <option>Senin - 08:30</option>
            <option>Senin - 09:00</option>
            <option>Senin - 09:30</option>
            <option>Senin - 10:00</option>
            <option>Senin - 10:30</option>
            <option>Senin - 11:00</option>
            <option>Senin - 11:30</option>
            <option>Senin - 12:30</option>
            <option>Senin - 13:00</option>
            <option>Senin - 13:30</option>
            <option>Senin - 14:00</option>
            <option>Senin - 14:30</option>
            <option>Senin - 15:00</option>
            <option>Selasa - 08:00</option>
            <option>Selasa - 08:30</option>
            <option>Selasa - 09:00</option>
            <option>Selasa - 09:30</option>
            <option>Selasa - 10:00</option>
            <option>Selasa - 10:30</option>
            <option>Selasa - 11:00</option>
            <option>Selasa - 11:30</option>
            <option>Selasa - 12:30</option>
            <option>Selasa - 13:00</option>
            <option>Selasa - 13:30</option>
            <option>Selasa - 14:00</option>
            <option>Selasa - 14:30</option>
            <option>Selasa - 15:00</option>
            <option>Rabu - 08:00</option>
            <option>Rabu - 08:30</option>
            <option>Rabu - 09:00</option>
            <option>Rabu - 09:30</option>
            <option>Rabu - 10:00</option>
            <option>Rabu - 10:30</option>
            <option>Rabu - 11:00</option>
            <option>Rabu - 11:30</option>
            <option>Rabu - 12:30</option>
            <option>Rabu - 13:00</option>
            <option>Rabu - 13:30</option>
            <option>Rabu - 14:00</option>
            <option>Rabu - 14:30</option>
            <option>Rabu - 15:00</option>
            <option>Kamis - 08:00</option>
            <option>Kamis - 08:30</option>
            <option>Kamis - 09:00</option>
            <option>Kamis - 09:30</option>
            <option>Kamis - 10:00</option>
            <option>Jumat - 08:00</option>
            <option>Jumat - 08:30</option>
            <option>Jumat - 09:00</option>
            <option>Jumat - 09:30</option>
            <option>Jumat - 10:00</option>
            <option>Sabtu - 08:00</option>
            <option>Sabtu - 08:30</option>
            <option>Sabtu - 09:00</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Tambah Janji</button>
</form>
@endsection
