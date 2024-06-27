<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Pastikan Anda telah membuat model User

class UserController extends Controller
{
    // Fungsi untuk menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Fungsi untuk melakukan proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek apakah pengguna ada dalam database
        $user = User::where('email', $request->email)->first();

        // Jika pengguna tidak ditemukan atau password tidak sesuai, kembali ke halaman login
        if (!$user || !password_verify($request->password, $user->password)) {
            return redirect()->route('login')->with('error', 'Email atau password salah');
        }

        // Jika email dan password sesuai, lakukan proses login
        auth()->login($user);

        // Redirect ke halaman dashboard atau halaman yang diinginkan
        return redirect()->route('dashboard');
    }
}
