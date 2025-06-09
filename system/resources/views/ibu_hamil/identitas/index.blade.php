@extends('ibu_hamil.layouts.base')
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
                <h4 class="header-title mb-3">Identitas</h4>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                @if ($identitas->count() < 1)
                    <div class="button-container">
                        <a href="{{ url('ibu_hamil/identitas/create') }}" class="btn btn-primary">
                            Tambah Data
                        </a>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-hover mails m-0 table table-actions-bar table-centered">
                        <thead>
                            <tr>
                                <th>Nama Ibu</th>
                                <th>Nik Ibu</th>
                                <th>Nama Suami</th>
                                <th>Nama Anak</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($identitas as $item)
                                <tr>
                                    <td>{{ $item->ibu_nama }}</td>
                                    <td>{{ $item->ibu_nik }}</td>
                                    <td>{{ $item->suami_nama }}</td>
                                    <td>{{ $item->anak_nama }}</td>
                                    <td>
                                        <a href="{{ url('ibu_hamil/identitas/show', $item->id) }}"
                                            class="btn btn-dark btn-sm">Show</a>
                                        <a href="{{ url('ibu_hamil/identitas/edit', $item->id) }}"
                                            class="btn btn-success btn-sm">Lengkapi Data</a>
                                            <a href="{{ url('ibu_hamil/identitas/delete', $item->id) }}"
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
