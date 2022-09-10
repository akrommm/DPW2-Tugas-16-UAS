<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    function index()
    {
        $user = request()->user();
        $data['list_produk'] = $user->produk;
        return view('produk.index', $data);
    }

    function create()
    {
        return view('produk.create');
    }

    function store()
    {
        $produk = new Produk();
        $produk->id_user = request()->user()->id;
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->foto = request('foto');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        $produk->handleUploadFoto();

        return redirect('admin/produk')->with('success', 'berhasil di tambahkan');
    }

    function show(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('produk.show', $data);
    }

    function edit(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('produk.edit', $data);
    }

    function update(Produk $produk)
    {
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        $produk->handleUploadFoto();

        return redirect('admin/produk')->with('success', 'berhasil di Edit');
    }

    function destroy(Produk $produk)
    {
        $produk->handleDelete();
        $produk->delete();
        return redirect('admin/produk')->with('danger', 'berhasil di hapus');
    }


    function filter()
    {
        $nama = request('nama');
        $stok = explode(",", request('stok'));
        $data['harga_min'] = $harga_min = request('harga_min');
        $data['harga_max'] = $harga_max = request('harga_max');
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        // $data['list_produk'] = Produk::whereIn('stok', $stok)->get();
        // $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
        // $data['list_produk'] = Produk::whereNotIn('stok', $stok)->get();
        // $data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
        // $data['list_produk'] = Produk::whereNotNull('stok')->get();
        // $data['list_produk'] = Produk::whereDate('created_at', ['2022-08-15', '2022-08-17'])->get();
        // $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->whereIn('stok', [10])->get();
        $data['nama'] = $nama;
        $data['stok'] = request('stok');



        return view('produk.index', $data);
    }

    public function showdata()
    {
        $user = request()->user();
        $data['list_produk'] = $user->produk;
        return view('produk.data', $data);
    }

    function addToCart(Request $request)
    {
        if (Auth::user()) {
            $cart = new Cart();
            $cart->id_user = request()->user()->id;
            $cart->harga = request('harga');
            $cart->nama = request('nama');
            $cart->foto = request('foto');
            $cart->produk_uuid = request('produk_uuid');
            $cart->save();

            return redirect('cart')->with('success', 'Produk Berhasil Ditambahkan Kekeranjang!!');
        } else {
            return redirect('home');
        }
    }
}
