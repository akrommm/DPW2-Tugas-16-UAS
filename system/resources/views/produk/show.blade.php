@extends('template.base')

@section('admin_content')

<div class="container">
    <a href="{{ url('admin/produk') }}" class="btn btn-primary btn-dark btn-sm mt-4 mb-0"><i class="fas fa-arrow-left"> Kembali</i></a>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{url('public', $produk->foto)}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    Detail Data Produk
                    <a href="{{url('admin/produk', $produk->id)}}/edit" class="btn btn-dark btn-sm float-right"><i class="fa fa-edit"></i> Edit
                    </a>
                </div>
                <div class="card-body">
                    <h4>{{$produk->nama}}</h4>
                    <hr>
                    @include ('produk.show.detail')
                    <p>
                        {!! nl2br($produk->deskripsi) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection