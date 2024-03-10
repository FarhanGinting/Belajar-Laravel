<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Login WRONG');

        return redirect('/login');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function changePassword()
    {
        return view('change-password');
    }

    public function prosesChangePassword(Request $request)
    {
        // 🕯️Cara Pertama Menggunakan Variabel Untuk Menampung Data Password🕯️🚨
        // // Cek Password Lama
        // $passwordLama = Hash::check($request->old_password, auth()->user()->password);
        // if (!$passwordLama) {
        //     Session::flash('status', 'failed');
        //     Session::flash('message', 'Old password not match with your current password');
        //     return back();
        // }

        // // Cek Password Baru Dengan Konfirmasi Password
        // $passwordBaru = $request->new_Password == $request->repeat_Password;
        // if (!$passwordBaru) {
        //     Session::flash('status', 'failed');
        //     Session::flash('message', 'New password and Repeat Password are not the same');
        //     return back();
        // }
        
        
        // Cek Password Lama
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            Session::flash('status', 'failed');
            Session::flash('message', 'Old password not match with your current password');
            return back();
        }

        // Cek Password Baru Dengan Pengulangan Password
        if ($request->new_Password != $request->repeat_Password) {
            Session::flash('status', 'failed');
            Session::flash('message', 'New password and Repeat Password are not the same');
            return back();
        }

        // 💡Jika Semua Kondisi Terpenuhi Maka Akan Lanjut Ke Proses Di Bawah Ini 💡🚨
        auth()->user()->update([
            'password' => Hash::make($request->new_Password)
        ]);
        Session::flash('status', 'success');
        Session::flash('message', 'Change Password Successfully');
        return redirect()->intended('/');
    }
}
