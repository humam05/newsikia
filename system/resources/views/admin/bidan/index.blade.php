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
                <h4 class="header-title mb-3">DATA BIDAN</h4>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="button-container">
                    <a href="{{ url('/admin/bidan/create') }}" class="btn btn-primary">
                        Tambah Data
                    </a>
                </div><br>
                <div class="table-responsive">
                    <table class="table table-hover mails m-0 table table-actions-bar table-centered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nik</th>
                                <th>No Telpon</th>
                                <th>Email</th>
                                <th>Fasyankes</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bidan as $index => $item)
                                <tr>
                                    <td>{{ ($bidan->currentPage() - 1) * $bidan->perPage() + $index + 1 }}</td>
                                    <td>{{ $item->nama_bidan }}</td>
                                    <td>{{ $item->nik }}</td>
                                    <td>{{ $item->no_telpon }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->fasyankes_id }}</td>
                                    <td>
                                        <a href="{{ url('admin/bidan/show', $item->id) }}"
                                            class="btn btn-dark btn-sm">Show</a>
                                        <a href="{{ url('admin/bidan/edit', $item->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ url('admin/bidan/delete', $item->id) }}"
                                            class="btn btn-danger btn-sm"

                                            onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- Pagination --}}
                <div class="pagination-container">
                    {{ $bidan->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
