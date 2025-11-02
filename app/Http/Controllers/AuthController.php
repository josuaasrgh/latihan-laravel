<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman register
     */
    public function register()
    {
        // Jika sudah login, langsung arahkan ke halaman home
        if (Auth::check()) {
            return redirect()->route('app.home');
        }

        // Tampilkan halaman register Livewire
        return view('pages.auth.register');
    }

    /**
     * Menampilkan halaman login
     */
    public function login()
    {
        // Jika user sudah login, tidak perlu ke halaman login lagi
        if (Auth::check()) {
            return redirect()->route('app.home');
        }

        // Tampilkan halaman login (akan memanggil komponen Livewire auth-login-livewire)
        return view('pages.auth.login');
    }

    /**
     * Logout dari aplikasi
     */
    public function logout()
    {
        // Hapus session login
        Auth::logout();

        // Redirect ke halaman login
        return redirect()->route('auth.login');
    }
}
