@extends('frontview.base')


@section('client_content')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container d-flex align-items-center">

        <nav class="product-pager ml-auto" aria-label="Product">
            <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">
                <i class="icon-angle-left"></i>
                <span>Prev</span>
            </a>

            <a class="product-pager-link product-pager-next" href="#" aria-label="Next" tabindex="-1">
                <span>Next</span>
                <i class="icon-angle-right"></i>
            </a>
        </nav><!-- End .pager-nav -->
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->
<br>

<div class="page-content">
    <div class="container">
        <div class="product-details-top">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-gallery product-gallery-vertical">
                        <div class="row">
                            <figure class="product-main-image">
                                <img id="product-zoom" src="{{url('public', $produk->foto)}}" alt="product image">

                                <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                    <i class="icon-arrows"></i>
                                </a>
                            </figure><!-- End .product-main-image -->

                            <div id="product-zoom-gallery" class="product-image-gallery">
                                <a href="#" data-image="{{url('public', $produk->foto)}}" data-zoom-image="{{url('public', $produk->foto)}}">
                                    <img src="{{url('public', $produk->foto)}}" alt="product side">
                                </a>

                            </div><!-- End .product-image-gallery -->
                        </div><!-- End .row -->
                    </div><!-- End .product-gallery -->
                </div>
                <div class="col-md-6">
                    <div class="product-details">
                        <h1 class="product-title">{{$produk->nama}}</h1><!-- End .product-title -->
                        <h6>Seller : {{$produk->seller->nama}}</h6>
                        <div class="product-price">
                            Rp. {{number_format($produk->harga)}}
                        </div><!-- End .product-price -->

                        <div class="details-filter-row details-row-size">
                            <label>Berat:</label>
                            <p>{{$produk->berat}} gr</p>
                            <div class="product-nav product-nav-thumbs">
                            </div><!-- End .product-nav -->
                        </div><!-- End .details-filter-row -->

                        <div class="details-filter-row details-row-size">
                            <label>Stok:</label>
                            <label>{{$produk->stok}}</label>
                            <div class="product-nav product-nav-thumbs">
                            </div><!-- End .product-nav -->
                        </div><!-- End .details-filter-row -->
                        <div class="product-content">
                            <p>{!! nl2br($produk->deskripsi) !!}</p>
                        </div><!-- End .product-content -->
                        <div class="details-filter-row details-row-size">
                            <label for="qty">Qty:</label>
                            <div class="product-details-quantity">
                                <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                            </div><!-- End .product-details-quantity -->
                        </div><!-- End .details-filter-row -->
                        <div class="product-details-action">
                            <form action="{{ url('add_to_cart') }}" method="post">
                                @csrf
                                <input type="hidden" name="foto" value="{{$produk->foto}}">
                                <input type="hidden" name="harga" value="{{$produk->harga}}">
                                <input type="hidden" name="nama" value="{{$produk->nama}}">
                                <input type="hidden" name="produk_uuid" value="{{$produk->uuid}}">
                                <button class="btn-product btn-cart"><span>Tambah Keranjang</span></button>
                            </form>
                        </div><!-- End .product-details-action -->
                        <div class="product-details-action">
                            <a href="{{ url('checkout')}}" class="btn btn-outline-primary-2 btn-order ">CHECKOUT</a>
                        </div><!-- End .product-details-action -->
                        <div class="product-details-footer">
                            <div class="social-icons social-icons-sm">
                                <span class="social-label">Share:</span>
                                <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                            </div>
                        </div><!-- End .product-details-footer -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End .container -->
</div><!-- End .page-content -->
@endsection