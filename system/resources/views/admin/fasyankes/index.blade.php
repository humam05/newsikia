@extends('layouts.base')
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
                </div>
                <h5 class="mt-0 font-14 mb-3">Contacts</h5>
                <div class="table-responsive">
                    <table class="table table-hover mails m-0 table table-actions-bar table-centered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Kecamatan</th>
                                <th>Kelurahan</th>
                                <th>Desa</th>
                                <th>Rt/Rw</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fasyankes as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->kecamatan }}</td>
                                    <td>{{ $item->kelurahan }}</td>
                                    <td>{{ $item->desa }}</td>
                                    <td>{{ $item->rt_rw }}</td>
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
