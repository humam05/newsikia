@extends('admin.layouts.base')
@section('content')
    <style>
        .button-container {
            display: flex;
            justify-content: flex-end;
        }
    </style>

    <div class="row">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">Akun Tenaga Kesehatan</h4>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="button-container">
                    <a href="{{ url('/admin/akun/puskesmas/create') }}" class="btn btn-primary">
                        Tambah Akun
                    </a>
                </div><br>
                <div class="table-responsive">
                    <table class="table table-hover mails m-0 table table-actions-bar table-centered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($puskesmas as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        <a href="{{ url('admin/akun/puskesmas/edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ url('admin/akun/puskesmas/delete', $item->id) }}" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
