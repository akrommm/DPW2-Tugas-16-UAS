@extends('frontview.base')


@section('client_content')
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="checkout">
            <div class="container">
                <form action="{{ url('pesan') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="checkout-title">CheckOut</h2><!-- End .checkout-title -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Nama *</label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <label>Alamat *</label>
                            <input type="text" class="form-control" name="alamat" placeholder="House number and Street name" required>

                            <label>Provinsi *</label>
                            <input type="text" name="provinsi" class="form-control" required>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Kabupaten *</label>
                                    <input type="text" name="kabupaten" class="form-control" required>
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label>Kecamatan *</label>
                                    <input type="text" name="kecamatan" class="form-control" required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Kode Post *</label>
                                    <input type="text" name="kode_pos" class="form-control" required>
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label>No Handphone *</label>
                                    <input type="text" name="no_handphone" class="form-control" required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <label>Alamat Email *</label>
                            <input type="email" name="email" class="form-control" required>

                            <label>Pembayaran</label>
                            <select name="pembayaran" class="form-control">
                                <option value="">Pilih Metode Pembayaran</option>
                                <option value="Alfamart">Alfamart</option>
                                <option value="Indomaret">Indomaret</option>
                                <option value="COD">COD</option>
                            </select>

                            <label>Tinggalkan Pesan (optional)</label>
                            <textarea class="form-control" name="pesan" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-3">
                            <div class="summary">
                                <h3 class="summary-title">Ringkasan Belanja</h3><!-- End .summary-title -->

                                <table class="table table-summary">
                                    <thead>
                                        <tr>
                                            <th>Produk</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td><a href="#">{{$cart->nama}}</a></td>
                                            <td>Rp. {{number_format($cart->harga)}}</td>
                                        </tr>
                                        <tr class="summary-total">
                                            <td>Total:</td>
                                            <td>Rp. {{number_format($cart->harga)}}</td>
                                        </tr><!-- End .summary-total -->
                                    </tbody>
                                </table><!-- End .table table-summary -->

                                <input type="hidden" name="harga" value="{{$cart->harga}}">
                                <input type="hidden" name="nama_produk" value="{{$cart->nama}}">
                                <input type="hidden" name="produk_id" value="{{$cart->id}}">
                                <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                    <span class="btn-text">Place Order</span>
                                    <span class="btn-hover-text">Proceed to Checkout</span>
                                </button>
                            </div><!-- End .summary -->
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </form>
            </div><!-- End .container -->
        </div><!-- End .checkout -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection