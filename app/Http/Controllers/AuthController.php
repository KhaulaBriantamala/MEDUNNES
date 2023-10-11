<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }


    public function registerSave (Request $request)
    {
        validation:make(request->all(), [
            'name' => 'required',
            'email' => 'requiredemail',
            'password' => 'required|confirmed'
        ])->validate();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'Admin'
        ]);

        return redirect()->route('login');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function dashboard()
    {
        return view('auth.dashboard');
    }

    public function pasien()
    {
        return view('auth.pasien');
    }

    public function konsultasi()
    {
        return view('auth.konsultasi');
    }

    public function dokter()
    {
        return view('auth.dokter');
    }

    public function spesialisasi()
    {
        return view('auth.spesialisasi');
    }

    public function logactivity()
    {
        return view('auth.logactivity');
    }

}
