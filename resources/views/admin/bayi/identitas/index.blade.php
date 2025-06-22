@extends('admin.layouts.base')
@section('content')
    <style>
        .button-container {
            display: flex;
            justify-content: flex-start;
        }

        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    </style>
    <div class="row">
        <div class="col-12">
            <section class="card">
                <header class="card-header text-uppercase" style="height: 70px;">
                    <form action="{{ url('admin/bayi/identitas') }}" method="GET"
                        class="form-horizontal form-label-left mb-4">
                        <div class="col-md-12">
                            <div class="input-group mb-2">
                                <input name="search" type="text" class="form-control" value="{{ request('search') }}"
                                    placeholder="Cari Bayi Berdasarkan Nama Bayi/ Nama Ibu/ Nik Ibu " required>
                                <div class="input-group-prepend ml-1">
                                    <button type="submit" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white">
                                            <i class="fas fa-search"></i>
                                        </span>
                                        <span class="text">Cari Akun</span>
                                    </button>
                                </div>
                                @if (request('search'))
                                    <div class="input-group-prepend ml-1">
                                        <a href="{{ url('admin/bayi/identitas') }}"
                                            class="btn btn-secondary btn-icon-split">
                                            <span class="icon text-white">
                                                <i class="fas fa-times"></i>
                                            </span>
                                            <span class="text">Reset</span>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </header>
            </section>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">Data Bayi Balita</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="button-container">
                </div><br>
                <div class="table-responsive">
                    <table class="table table-hover mails m-0 table-centered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Ibu</th>
                                <th>NIK Ibu</th>
                                <th>Nama Anak</th>
                                <th>Anak Ke-</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($anak as $index => $item)
                                <tr>
                                    <td>{{ ($anak->currentPage() - 1) * $anak->perPage() + $loop->iteration }}</td>
                                    <td>{{ $item->identitas->ibu_nama ?? '-' }}</td>
                                    <td>{{ $item->identitas->ibu_nik ?? '-' }}</td>
                                    <td>{{ $item->anak_nama }} </td>
                                    <td>{{$item->anak_ke ?? '-'}}</td>
                                    <td>
                                        <a href="{{ url('admin/bayi/identitas/show', $item->id) }}"
                                            class="btn btn-dark btn-sm">Show</a>
                                        <a href="{{ url('admin/bayi/identitas/edit', $item->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ url('admin/bayi/identitas/delete', $item->id) }}"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                        <a href="{{ url('admin/bayi/periksa/create', $item->id) }}"
                                            class="btn btn-success btn-sm">Periksa</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center text-muted">Data tidak ditemukan</td>
                                </tr>
                            @endforelse
                        </tbody>


                    </table>
                </div>
                @if ($anak->hasPages())
                    <div class="pagination-container mt-3">
                        {{ $anak->withQueryString()->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
