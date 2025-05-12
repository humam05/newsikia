@extends('admin.layouts.base')
@section('content')
<style>
    .button-container {
        display: flex;
        justify-content: flex-end;
    }

    /* Mengatur lebar kolom agar tetap konsisten */
    .table-responsive {
        overflow-x: auto;
    }

    .table th, .table td {
        white-space: nowrap; /* Mencegah teks untuk wrap ke baris baru */
    }

    /* Mengatur lebar kolom "Action" */
    .table th:nth-child(8), .table td:nth-child(8) {
        width: 150px; /* Sesuaikan lebar sesuai kebutuhan */
        min-width: 150px; /* Memastikan lebar minimum */
        max-width: 150px; /* Memastikan lebar maksimum */
        text-align: center; /* Pusatkan tombol aksi */
    }

    /* Mengatur tombol aksi agar tetap pada ukuran yang konsisten */
    .btn-sm {
        min-width: 60px; /* Sesuaikan lebar minimum tombol */
        margin: 2px; /* Jarak antara tombol */
    }
</style>
    <div class="row">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">DATA FASYANKES</h4>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">

        <div class="col-sm-12">
            <div class="card-box">
                <div class="button-container">
                    <a href="{{ url('/admin/fasyankes/create') }}" class="btn btn-primary">
                        Tambah Data
                    </a>
                </div><br>
                <div class="table-responsive">
                    <table class="table table-hover mails m-0 table table-actions-bar table-centered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Kecamatan</th>
                                <th>Kelurahan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fasyankes as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->kecamatan }}</td>
                                    <td>{{ $item->kelurahan }}</td>
                                    <td>
                                        <a href="{{ url('admin/fasyankes/show', $item->id) }}"
                                            class="btn btn-dark btn-sm">Show</a>
                                        <a href="{{ url('admin/fasyankes/edit', $item->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ url('admin/fasyankes/delete', $item->id) }}"
                                            class="btn btn-danger btn-sm"
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
