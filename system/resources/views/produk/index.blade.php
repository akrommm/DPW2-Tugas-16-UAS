@inject('timeService', 'App\Services\TimeServices')

@extends('template.base')

@section('admin_content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Data Produk
                    <a href="{{ url('admin/produk/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table table-datatable">
                        <thead>
                            <th>No</th>
                            <th>Aksi</th>
                            <th>Nama Produk</th>
                            <th>Tanggal Dibuat</th>
                            <th>Harga</th>
                            <th>Stok</th>
                        </thead>
                        <tbody>
                            @foreach($list_produk as $produk)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('admin/produk', $produk->uuid) }}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                        <a href="{{ url('admin/produk', $produk->uuid) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                        @include('template.utils.delete', ['url' => url('admin/produk', $produk->uuid)])
                                    </div>
                                </td>
                                <td>{{$produk->nama}}</td>
                                <td>{{$produk->created_at->diffForHumans()}}</td>
                                <td>Rp. {{number_format($produk->harga)}}</td>
                                <td>{{$produk->stok}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection