<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Provinsi;
use App\Http\Controllers\API\AlamatResource;
use App\Models\Cart;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class ClientController extends Controller
{
    function filter()
    {
        $nama = request('nama');
        $data['nama'] = $nama;
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->paginate(3);

        return view('frontview.shop', $data);
    }

    function filter2()
    {
        $harga_min = request('harga_min');
        $harga_max = request('harga_max');
        $data['harga_min'] = $harga_min;
        $data['harga_max'] = $harga_max;

        $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->paginate(3);
        return view('frontview.shop', $data);
    }

    function showHome()
    {
        $cart = Cart::count();
        $data['list_produk'] = Produk::all();
        return view('frontview.home', $data, compact('cart'));
    }

    function showShop()
    {
        $cart = Cart::where('id_user', Auth::id())->get();
        $data['list_produk'] = Produk::all();
        $data['list_produk'] = Produk::paginate(8);

        return view('frontview.shop', $data, compact('cart'));
    }

    function showCheckout(Cart $cart)
    {
        $data['cart'] = $cart;
        return view('frontview.checkout', $data);
    }

    function showProduct(Produk $produk)
    {
        $cart = Cart::count();
        $data['produk'] = $produk;
        return view('frontview.product', $data, compact('cart'));
    }

    function showCart(Cart $cart)
    {
        $cart = Cart::count();
        $user = request()->user();
        $data['list_cart'] = $user->product;

        return view('frontview.cart', $data, compact('cart'));
    }

    function showPesan(Pesan $pesan)
    {
        $user = request()->user();
        $data['list_pesan'] = Pesan::all();

        return view('frontview.order', $data);
    }

    function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect('cart')->with('danger', 'Barang Berhasil Di Hapus!!');
    }

    function pesanan()
    {
        if (Auth::user()) {
            $pesan = new Pesan();
            $pesan->id_user = request()->user()->id;
            $pesan->harga = request('harga');
            $pesan->nama = request('nama');
            $pesan->nama_produk = request('nama_produk');
            $pesan->alamat = request('alamat');
            $pesan->provinsi = request('provinsi');
            $pesan->kabupaten = request('kabupaten');
            $pesan->kecamatan = request('kecamatan');
            $pesan->email = request('email');
            $pesan->no_handphone = request('no_handphone');
            $pesan->kode_pos = request('kode_pos');
            $pesan->pembayaran = request('pembayaran');
            $pesan->pesan = request('pesan');
            $pesan->produk_id = request('produk_id');
            $pesan->save();

            return redirect('pesan')->with('success', 'CheckOut Telah Berhasil!!');
        } else {
            return redirect('login');
        }
    }

    function hapus(Pesan $pesan)
    {
        $pesan->delete();
        return redirect('pesan')->with('danger', 'Pesanan Berhasil Di Hapus!!');
    }
}
