@extends ('template.base')

@section('admin_content')

<h1 class="ml-5 mt-5">
    <strong>Selamat Datang,
        @if (auth()->user()->level == 0)
        Admin
        @elseif (auth()->user()->level == 1)
        Di Halaman Penjual
        @endif
    </strong>
</h1>
@if (auth()->user()->level == 1)
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6 ml-5">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$produk}}</h3>

                    <p>Produk</p>
                </div>
                <div class="icon">
                    <i class="fas fa-box"></i>
                </div>
                <a href="{{ url('admin/produk') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <strong>Data Pesanan</strong>
                </div>
                <div class="card-body">
                    <table class="table table-datatable">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nama Produk</th>
                            <th>Tanggal Pesanan</th>
                            <th>Harga</th>
                            <th>Pembayaran</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($list_pesan as $pesan)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $pesan->nama}} </td>
                                <td>{{ $pesan->nama_produk }}</td>
                                <td>{{$pesan->created_at->diffForHumans()}}</td>
                                <td>Rp. {{number_format($pesan->harga)}}</td>
                                <td>{{ $pesan->pembayaran }}</td>
                                <td>Diproses</td>
                                <td>
                                    <form action="{{ url('pesan', $pesan->id) }}" method="POST" class="form-inline" onsubmit="return confirm('Yakin Akan Membatalkan Pesanan Ini?')">
                                        @csrf
                                        @method("delete")
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if (auth()->user()->level == 0)
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6 ml-5">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$user}}</h3>

                    <p>User</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <a href="{{ url('admin/user') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endif


@endsection