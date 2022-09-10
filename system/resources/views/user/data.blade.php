@extends('template.base')

@section('admin_content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card shadow">
                <div class="card-header ">
                    <h6 class="font-weight-bold text-primary">
                        User
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table table-bordered" id="dataTable">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Produk</th>
                                <th>Position</th>
                            </thead>
                            <tbody>
                                @foreach ($list_user as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->produk_count }}</td>
                                    <td>
                                        @if ($user->level == '0')
                                        admin
                                        @elseif ($user->level == '1')
                                        Penjual
                                        @elseif ($user->level == '2')
                                        Pembeli
                                        @endif
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
</div>
@endsection