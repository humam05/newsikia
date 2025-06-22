@extends('admin.layouts.base')

@section('content')
    <style>
        .button-container {
            display: flex;
            justify-content: flex-end;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .table th,
        .table td {
            white-space: nowrap;
        }

        .table th:nth-child(5),
        .table td:nth-child(5) {
            width: 150px;
            min-width: 150px;
            max-width: 150px;
            text-align: center;
        }

        .btn-sm {
            min-width: 60px;
            margin: 2px;
        }

        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    </style>

    <div class="row">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">DATA FASYANKES</h4>
            </div>
        </div>
    </div>

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
                                <th>Nama</th>
                                <th>Fasyankes ID</th>
                                <th>Kecamatan</th>
                                <th>Kelurahan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fasyankes as $index => $item)
                                <tr>
                                    <td>{{ ($fasyankes->currentPage() - 1) * $fasyankes->perPage() + $index + 1 }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->id }}</td>
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

                {{-- Pagination --}}
                <div class="pagination-container">
                    {{ $fasyankes->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
