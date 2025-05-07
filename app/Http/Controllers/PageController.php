<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController
{
    public function showLogin()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $username = $request->input('username');

        if (strtolower($username) === 'hettypratiwi') {
            return redirect()->route('dashboard') . '?username=' . urlencode($username);
        }

        return back()->with('error', 'Username tidak dikenali.');
    }

    public function dashboard(Request $request)
    {
        $jadwal = [
            ['hari' => 'Senin', 'jam' => '08:00 - 15:00'],
            ['hari' => 'Selasa', 'jam' => '08:00 - 15:00'],
            ['hari' => 'Rabu', 'jam' => '08:00 - 15:00'],
            ['hari' => 'Kamis', 'jam' => '08:00 - 10:00'],
            ['hari' => 'Jumat', 'jam' => '08:00 - 10:00'],
            ['hari' => 'Sabtu', 'jam' => '08:00 - 09:00'],
        ];

        $patients = [
            ['id' => 1, 'name' => 'Ahmad Fadli', 'complaint' => 'Gigi berlubang', 'appointment' => '08:00'],
            ['id' => 2, 'name' => 'Siti Aminah', 'complaint' => 'Gusi bengkak', 'appointment' => '08:30'],
            ['id' => 3, 'name' => 'Dewi Kartika', 'complaint' => 'Tambal gigi', 'appointment' => '09:00'],
            ['id' => 4, 'name' => 'Rudi Hartono', 'complaint' => 'Gigi sensitif', 'appointment' => '09:30'],
            ['id' => 5, 'name' => 'Budi Santoso', 'complaint' => 'Gigi goyang', 'appointment' => '10:00'],
            ['id' => 6, 'name' => 'Maya Sari', 'complaint' => 'Gusi bengkak', 'appointment' => '10:30'],
            ['id' => 7, 'name' => 'Lisa Putri', 'complaint' => 'Sakit gigi', 'appointment' => '11:00'],
            ['id' => 8, 'name' => 'Farhan Zaki', 'complaint' => 'Gigi berlubang', 'appointment' => '12:30'],
            ['id' => 9, 'name' => 'Siti Khodijah', 'complaint' => 'Gigi goyang', 'appointment' => '13:00'],
            ['id' => 10, 'name' => 'Angga Wicaksono', 'complaint' => 'Gigi sensitif', 'appointment' => '13:30'],
            ['id' => 11, 'name' => 'Eka Andriani', 'complaint' => 'Gusi bengkak', 'appointment' => '14:00'],
            ['id' => 12, 'name' => 'Andri Setiawan', 'complaint' => 'Sakit gigi', 'appointment' => '14:30'],
            ['id' => 13, 'name' => 'Putri Amalia', 'complaint' => 'Tambal gigi', 'appointment' => '15:00']
        ];

        $username = $request->query('username', 'hettypratiwi');

        $role = 'customer';
        if (strtolower($username) === 'hettypratiwi') {
            $role = 'admin';
        }

        return view('dashboard', compact('jadwal', 'patients', 'username', 'role'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'hettypratiwi');
        return view('profile', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'hettypratiwi');

        $listData = [
            ['nama' => 'Pasien A', 'umur' => 30],
            ['nama' => 'Pasien B', 'umur' => 25],
        ];

        return view('pengelolaan', compact('username', 'listData'));
    }
}
