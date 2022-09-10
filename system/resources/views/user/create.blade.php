@extends('template.base')

@section('admin_content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <a href="{{ url('admin/user') }}" class="btn btn-primary btn-sm "><i class="fas fa-arrow-left"> Kembali</i></a>
            <div class="card">
                <div class="card-header">
                    Tambah Data User
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/user') }}" method="post">
                        @csrf
                        <div class="form-grup">
                            <label for="" class="control-label">Nama</label>
                            @include('template.utils.errors', ['item' => 'nama'])
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-grup">
                            <label for="" class="control-label">Username</label>
                            @include('template.utils.errors', ['item' => 'username'])
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-grup">
                            <label for="" class="control-label">Email</label>
                            @include('template.utils.errors', ['item' => 'email'])
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-grup">
                            <label for="" class="control-label">Jenis Kelamin</label>
                            @include('template.utils.errors', ['item' => 'jenis_kelamin'])
                            <select name="jenis_kelamin" class="form-control">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="1">Laki-Laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-grup">
                            <label for="" class="control-label">Password</label>
                            @include('template.utils.errors', ['item' => 'password'])
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-grup">
                            <label for="" class="control-label">No HP</label>
                            @include('template.utils.errors', ['item' => 'no_handphone'])
                            <input type="text" class="form-control" name="no_handphone">
                        </div>
                        <button class="btn btn-dark float-right mt-3"><i class="fa fa-save"> Simpan</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection