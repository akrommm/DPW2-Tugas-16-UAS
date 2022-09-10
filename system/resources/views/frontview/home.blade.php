<!DOCTYPE html>
<html lang="en">


<!-- molla/index-18.html  22 Nov 2019 10:00:41 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Glory - Store</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('public') }}/assets/images/icons/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('public') }}/assets/images/icons/icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('public') }}/assets/images/icons/icon.png">
    <link rel="manifest" href="{{ url('public') }}/assets/images/icons/site.html">
    <link rel="mask-icon" href="{{ url('public') }}/assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="{{ url('public') }}/assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ url('public') }}/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/css/demos/demo-18.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-11">
            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="{{ url('home') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('shop') }}">Shop</a>
                                </li>
                                <li>
                                    <a href="{{ url('pesan') }}">Order</a>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->

                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <a href="index.html" class="logo">
                            <img src="{{ url('public') }}/assets/images/demos/demo-18/logo.png" alt="Molla Logo" width="82" height="25">
                        </a>
                    </div><!-- End .header-center -->

                    <div class="header-right">
                        <div class="header-search header-search-extended header-search-visible ">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                        <div class="dropdown cart-dropdown">
                            <a href="{{ url('cart') }}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                            </a>
                        </div><!-- End .cart-dropdown -->
                        <br>
                        <nav class="main-nav ml-7">
                            <ul class="menu sf-arrows">
                                <li class="mr-0 ml-4"><a href="{{ url('login') }} " onclick="return confirm('Apakah anda yakin akan logout ?')">
                                        @if(Auth::check())
                                        {{request()->user()->nama}}
                                        @else
                                        Silahkan Login
                                        @endif</a>
                                </li>
                            </ul>
                        </nav><!-- End .main-nav -->

                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class=" main">
            <div class="intro-slider-container mb-3 mb-lg-5">
                <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"dots": true, "nav": false}'>
                    <div class="intro-slide" style="background-image: url(public/assets/images/demos/demo-18/slider/1.jpg);">
                        <div class="container">
                            <div class="intro-content text-center">
                                <h3 class="intro-subtitle cross-txt text-primary">SEASONAL PICKS</h3><!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title text-white">Summer Sale</h1><!-- End .intro-title -->
                                <div class="intro-text text-white">up to 70% off</div><!-- End .intro-text -->
                                <div class="intro-action cross-txt">
                                    <a href="category.html" class="btn btn-outline-white">
                                        <span>Discover More</span>
                                    </a>
                                </div>
                            </div>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(public/assets/images/demos/demo-18/slider/2.jpg);">
                        <div class="container">
                            <div class="intro-content text-center">
                                <h3 class="intro-subtitle text-primary cross-txt">T-Shirt</h3><!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title text-white">Save up to</h1><!-- End .intro-title -->
                                <div class="intro-text text-white">30-50% off</div><!-- End .intro-text -->
                                <div class="intro-action cross-txt">
                                    <a href="category.html" class="btn btn-outline-white">
                                        <span>Discover More</span>
                                    </a>
                                </div>
                            </div>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader text-white"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="title">Recent Arrivals</h2><!-- End .title -->
                        <div class="products-container">
                            <div class="owl-carousel mt-3 mb-4 owl-simple" data-toggle="owl" data-owl-options='{
                                        "nav": false, 
                                        "dots": true,
                                        "margin": 20,
                                        "loop": false,
                                        "responsive": {
                                            "0": {
                                                "items":1
                                            },
                                            "480": {
                                                "items":2
                                            },
                                            "768": {
                                                "items":3
                                            },
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":5,
                                                "nav": true
                                            }
                                        }
                                    }'>
                                @foreach ($list_produk as $produk)
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="{{ url('product', $produk->uuid) }}">
                                            <img src="{{url('public', $produk->foto)}}" alt="Product image" class="product-image">
                                            <img src="{{url('public', $produk->foto)}}" alt="Product image" class="product-image-hover">
                                        </a>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="{{url('product', $produk->uuid)}}">{{$produk->nama}}</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            Stok : {{$produk->stok}}
                                        </div><!-- End .product-price -->
                                        <div class="product-price">
                                            Rp. {{number_format($produk->harga)}}
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                @endforeach
                            </div>
                        </div><!-- End .row -->
                        <div class="more-container text-center mt-0 mb-0">
                            <a href="category.html" class="btn btn-outline-primary-2 btn-more">
                                <span>View more Products</span>
                            </a>
                        </div><!-- End .more-container -->
                    </div><!-- End .products -->
                </div><!-- End .col-lg-9 -->
            </div><!-- End .row -->

            <br>
            <br>
            <br>

    </div><!-- End .container -->

    </main><!-- End .main -->

    <footer class="footer footer-dark">
        <div class="icon-boxes-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon">
                                <i class="icon-rocket"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                <p>Orders $50 or more</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon">
                                <i class="icon-rotate-left"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                <p>Within 30 days</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon">
                                <i class="icon-info-circle"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                <p>When you sign up</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon">
                                <i class="icon-life-ring"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                <p>24/7 amazing services</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .icon-boxes-container -->
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="widget widget-about">
                            <img src="{{ url('public') }}/assets/images/demos/demo-18/logo.png" class="footer-logo" alt="Footer Logo" width="82" height="25">
                            <p>Glory-Store merupakan akun resmi dari Glory.inc.</p>

                            <div class="social-icons">
                                <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                <a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                                <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                            </div><!-- End .soial-icons -->
                        </div><!-- End .widget about-widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="about.html">About Molla</a></li>
                                <li><a href="#">How to shop on Molla</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="login.html">Log in</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Money-back guarantee!</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Terms and conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">Sign In</a></li>
                                <li><a href="cart.html">View Cart</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .footer-middle -->

        <div class="footer-bottom">
            <div class="container">
                <p class="footer-copyright">Copyright © Arief Muhammad Akrom. All Rights Reserved.</p><!-- End .footer-copyright -->
                <figure class="footer-payments">
                    <img src="{{ url('public') }}/assets/images/payments.png" alt="Payment methods" width="272" height="20">
                </figure><!-- End .footer-payments -->
            </div><!-- End .container -->
        </div><!-- End .footer-bottom -->
    </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="category.html">Shop</a>
                    </li>
                    <li>
                        <a href="product.html" class="sf-with-ul">Product</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="elements-list.html">Elements</a>
                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Plugins JS File -->
    <script src="{{ url('public') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.hoverIntent.min.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.waypoints.min.js"></script>
    <script src="{{ url('public') }}/assets/js/superfish.min.js"></script>
    <script src="{{ url('public') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ url('public') }}/assets/js/bootstrap-input-spinner.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="{{ url('public') }}/assets/js/main.js"></script>
    <script src="{{ url('public') }}/assets/js/demos/demo-18.js"></script>
</body>


<!-- molla/index-18.html  22 Nov 2019 10:00:57 GMT -->

</html>