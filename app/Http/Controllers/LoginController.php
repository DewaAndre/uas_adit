<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Sesuaikan dengan nama file blade Anda
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'nik' => 'required|string',
            'password' => 'required|string',
        ]);

        // Coba login
        if (Auth::attempt(['nik' => $request->nik, 'password' => $request->password])) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'nik' => 'NIK atau password salah.',
        ])->withInput();
    }

    public function dashboard()
    {
        return view('dashboard'); // Sesuaikan dengan view dashboard Anda
    }
}
