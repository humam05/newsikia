@extends('nakes.layouts.base')
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
                    <form action="{{ url('nakes/pesan') }}" method="GET" class="form-horizontal form-label-left mb-4">
                        <div class="col-md-12">
                            <div class="input-group mb-2">
                                <input name="search" type="text" class="form-control" value="{{ request('search') }}"
                                    placeholder="Cari Berdasarkan Nama Ibu" required>
                                <div class="input-group-prepend ml-1">
                                    <button type="submit" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white">
                                            <i class="fas fa-search"></i>
                                        </span>
                                        <span class="text">Cari</span>
                                    </button>
                                </div>
                                @if (request('search'))
                                    <div class="input-group-prepend ml-1">
                                        <a href="{{ url('nakes/pesan') }}" class="btn btn-secondary btn-icon-split">
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
                <h4 class="header-title mb-3">Daftar Ibu</h4>
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
                                <th>Aksi</th>
                                <th>Nama Ibu</th>
                                <th>No. WA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pesan as $item)
                                <tr>
                                    <td>{{ ($pesan->currentPage() - 1) * $pesan->perPage() + $loop->iteration }}</td>
                                    <td>
                                        <a href="{{ url('nakes/pesan/kirim_pesan', $item->id) }}" class="btn btn-success btn-sm">
                                            Kirim WhatsApp
                                        </a>
                                    </td>
                                    <td>{{ $item->ibu_nama ?? '-' }}</td>
                                    <td>{{ $item->ibu_telepon ?? '-' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">Data tidak ditemukan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if ($pesan->hasPages())
                    <div class="pagination-container mt-3">
                        {{ $pesan->withQueryString()->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
