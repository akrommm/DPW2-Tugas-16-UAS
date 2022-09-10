<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\Produk;
use App\Models\User;

class HomeController extends Controller
{


    function showBeranda(Pesan $pesan)
    {
        $produk = Produk::count();
        $user = User::count();
        $data['list_pesan'] = Pesan::all();
        return view('admin.beranda', $data, compact('produk', 'user'));
    }

    function showProduk()
    {
        return view('admin.produk');
    }

    function showKategori()
    {
        return view('admin.kategori');
    }

    function showUser()
    {
        return view('admin.user');
    }
}
