@extends('admin.layouts.base')
@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">Akun Dinas</h4>
            </div>
        </div>
    </div>
    <div class="button-container">
        <a href="{{ url('/admin/akun/dinas/create') }}" class="btn btn-primary float-right">
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
                @foreach ($dinkes as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a href="{{ url('admin/akun/dinkes/show', $item->id) }}" class="btn btn-dark btn-sm">Show</a>
                            <a href="{{ url('admin/akun/dinkes/edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ url('admin/akun/dinkes/delete', $item->id) }}" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
