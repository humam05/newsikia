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
    <div class="button-container">
        <a href="{{ url('/admin/ibu_hamil/identitas') }}" class="btn btn-success">
            Kembali Ke Daftar Ibu Hamil
        </a>
    </div><br>

    <div class="row">
        <div class="col-12">
            <section class="card">
                <header class="card-header text-uppercase" style="height: 70px;">
                    <form action="{{ url('admin/ibu_hamil/periksa_rutin') }}" method="GET"
                        class="form-horizontal form-label-left mb-4">
                        <div class="col-md-12">
                            <div class="input-group mb-2">
                                <input name="search" type="text" class="form-control" value="{{ request('search') }}"
                                    placeholder="Cari Pasien Berdasarkan NO. NIK" maxlength="16" minlength="16" required>
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
                                        <a href="{{ url('admin/ibu_hamil/periksa_rutin') }}"
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
                <h4 class="header-title mb-3">Daftar Pemeriksaan Rutin</h4>
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
                                <th>NIK</th>
                                <th>Hari / Tanggal</th>
                                <th>Keluhan</th>
                                <th>Berat Badan</th>
                                <th>Tinggi Fundus</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($periksa_rutin as $item)
                                <tr>
                                    <td>{{ ($periksa_rutin->currentPage() - 1) * $periksa_rutin->perPage() + $loop->iteration }}
                                    </td>
                                    <td>{{ $item->identitas->ibu_nama ?? '-' }}</td>
                                    <td>{{ $item->identitas->ibu_nik ?? '-' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->tanggal_periksa)->translatedFormat('l, d F Y') }}
                                    </td>
                                    <td>{{ $item->keluhan }}</td>
                                    <td>{{ $item->berat_badan }} kg</td>
                                    <td>{{ $item->tinggi_fundus }} cm</td>
                                    <td>
                                        <a href="{{ url('admin/ibu_hamil/periksa_rutin/show', $item->id) }}"
                                            class="btn btn-dark btn-sm">Show</a>
                                        <a href="{{ url('admin/ibu_hamil/periksa_rutin/edit', $item->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ url('admin/ibu_hamil/periksa_rutin/delete', $item->id) }}"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
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
                @if ($periksa_rutin->hasPages())
                    <div class="pagination-container mt-3">
                        {{ $periksa_rutin->withQueryString()->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
