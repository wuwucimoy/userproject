<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $user = User::where('username', $request->username)->first();

        if (!$user) {
            return back()->withErrors(['login' => 'Username tidak ditemukan']);
        }

        // CEK PASSWORD TANPA HASH
        if ($user->password !== $request->password) {
            return back()->withErrors(['login' => 'Password salah']);
        }

        // SIMPAN DATA LOGIN DI SESSION
        Session::put('user', $user);

        // LANGSUNG KE HALAMAN INDEX
        return redirect()->route('index');
    }

    public function logout()
    {
        Session::forget('user');
        return redirect()->route('login');
    }
}
