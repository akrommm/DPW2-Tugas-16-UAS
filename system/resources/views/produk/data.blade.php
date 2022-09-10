@extends('template.base')

@section('admin_content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card shadow">
                <div class="card-header  ">
                    <h6 class="font-weight-bold text-primary">
                        Data Produk
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table table-bordered" id="dataTable">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Tanggal</th>
                            </thead>
                            <tbody>
                                @foreach ($list_produk as $produk)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $produk->nama }}</td>
                                    <td>{{ $produk->harga }}</td>
                                    <td>{{ $produk->stok }}</td>
                                    <td>{{ $produk->created_at->format("F j, Y, g:i a") }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection