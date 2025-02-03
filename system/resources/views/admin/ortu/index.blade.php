@extends('layouts.base')
@section('content')
<style>
    .button-container {
        display: flex;
        justify-content: flex-end;
    }
</style>
</style>
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">DATA ORANG TUA BAYI</h4>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="button-container">
                <a href="{{ url('/admin/bayi/create') }}" class="btn btn-primary">
                    Tambah Data
                </a>
            </div><br>
            <div class="table-responsive">
                <table class="table table-hover mails m-0 table table-actions-bar table-centered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>No Telpon</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ortu as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jk_ortu }}</td>
                                <td>{{ $item->tmp_lahir_ortu }}</td>
                                <td>{{ $item->tlp }}</td>
                                <td>{{ $item->alamat}}</td>
                                <td>
                                    <a href="{{ url('ortu/ortu/show', $item->id) }}"
                                        class="btn btn-dark btn-sm">Show</a>
                                    <a href="{{ url('ortu/ortu/edit', $item->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{ url('ortu/ortu/delete', $item->id) }}"
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
@endsection
