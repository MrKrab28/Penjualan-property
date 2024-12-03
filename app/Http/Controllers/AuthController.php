<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {

        return view('auth.login');
    }

    public function regis()
    {
        return view('auth.register');
    }

    public function registerUser(Request $request)
    {
        $data  = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
            'jk' => 'required',
            'no_hp' => 'required|min:11',
        ]);

        $data['password'] = bcrypt($data['password']);
        User::create($data);



        return view('auth.login')->with('success', 'Registrasi Berhasil');
    }
    public function authenticate(Request $request)
    {
        $remember = $request->remember ? true : false;

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        if (Auth::guard('user')->attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->route('user.index');
        }

        return redirect()->back()->with('error', 'Email atau Password salah');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function logoutUser(Request $request)
    {
        Auth::guard('user')->logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
