<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Frontview
Route::get('/', [ClientController::class, 'showHome']);
Route::get('home', [ClientController::class, 'showHome']);
Route::get('home/{status}', [ClientController::class, 'showHome']);
Route::get('shop', [ClientController::class, 'showShop']);
Route::get('product', [ClientController::class, 'showProduct']);
Route::get('product/{produk}', [ClientController::class, 'showProduct']);
Route::get('checkout', [ClientController::class, 'showCheckout']);
Route::get('cart', [ClientController::class, 'showCart']);
Route::get('checkout/{cart}', [ClientController::class, 'showCheckout']);
Route::delete('cart/{cart}', [ClientController::class, 'destroy']);
Route::post('shop/filter', [ClientController::class, 'filter']);
Route::post('shop/filter2', [ClientController::class, 'filter2']);
Route::get('pesan', [ClientController::class, 'showPesan']);

// Setting
Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);

// Login
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

// Register
Route::get('regis', [AuthController::class, 'showRegis']);
Route::post('regis', [AuthController::class, 'store']);

// admin
Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('beranda/{status}', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('user', [HomeController::class, 'showUser']);
Route::get('dataproduk', [ProdukController::class, 'showdata']);
Route::get('datauser', [UserController::class, 'showdata']);

// as admin
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
});

// cart
Route::post('add_to_cart', [ProdukController::class, 'addToCart']);

// pesanan
Route::post('pesan', [ClientController::class, 'pesanan']);
Route::delete('pesan/{pesan}', [ClientController::class, 'hapus']);
