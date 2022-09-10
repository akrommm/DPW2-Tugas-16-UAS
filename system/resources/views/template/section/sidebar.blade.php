<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('beranda') }}" class="brand-link">
        <img src="{{ url('public') }}/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image mt-0" style="opacity: .8">
        <span class="brand-text font-weight-bold">GLORY.co</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('public') }}/dist/img/jiro.jpg" class="brand-image img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <strong>{{ Auth::user()->nama }}</strong>
                    @if (auth()->user()->level == 0)
                    <br>
                    Admin
                    @elseif (auth()->user()->level == 1)
                    <br>
                    Penjual
                    @endif
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                @if (auth()->user()->level == 0)
                <li class="nav-item">
                    <a href=" {{ url('beranda/admin') }}  " class="nav-link {{request()->is('beranda/admin') ? 'active' : ''}} ">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                @elseif (auth()->user()->level == 1 )
                <li class="nav-item">
                    <a href=" {{ url('beranda/penjual') }}  " class="nav-link {{request()->is('beranda/penjual') ? 'active' : ''}} ">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                @endif


                @if (auth()->user()->level == 0)
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href=" {{ url('datauser') }} " class="nav-link {{request()->is('datauser') ? 'active' : ''}} ">
                                <i class="far fa-clipboard nav-icon"></i>
                                <p>Data User</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href=" {{ url('admin/user') }} " class="nav-link {{request()->is('admin/user') ? 'active' : ''}} ">
                                <i class="far fa-user nav-icon"></i>
                                <p>User</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @elseif (auth()->user()->level == 1 )
                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href=" {{ url('dataproduk') }} " class="nav-link {{request()->is('dataproduk') ? 'active' : ''}} ">
                                <i class="far fa-clipboard nav-icon"></i>
                                <p>Data Produk</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href=" {{ url('admin/produk') }} " class="nav-link {{request()->is('admin/produk') ? 'active' : ''}} ">
                                <i class="fas fa-box nav-icon"></i>
                                <p>Produk</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href=" {{ url('shop') }} " class="nav-link {{request()->is('shop') ? 'active' : ''}} ">

                                <p>Go to Shop</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /sidebar -->
</aside>