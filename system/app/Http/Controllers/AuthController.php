<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AuthController extends Controller
{
    function showLogin()
    {
        return view('login');
    }

    function showRegis()
    {
        return view('regis');
    }

    function loginProcess()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            if ($user->level == 0) return redirect('beranda/admin')->with('success', 'Berhasil Login Sebagai Admin');
            if ($user->level == 1) return redirect('beranda/penjual')->with('success', 'Berhasil Login Sebagai Penjual');
            if ($user->level == 2) return redirect('home')->with('success', 'Login Berhasil');
        } else {
            return back()->with('danger', 'Login Gagal, Silahkan cek email dan password anda');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->nama = request('nama');
        $user->email = request('email');
        $user->level = request('level');
        $user->username = request('username');
        $user->jenis_kelamin = request('jenis_kelamin');
        $user->password = bcrypt(request('password'));
        if (request('level') == '0') {
            $user->level = '0';
        } elseif (request('level') == '1') {
            $user->level = '1';
        } elseif (request('level') == '2') {
            $user->level = '2';
        }
        $user->save();

        return redirect('login');
    }
}
