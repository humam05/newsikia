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
    <a href="{{ url('/admin/bayi/identitas') }}" class="btn btn-success">
        Kembali Ke Daftar Bayi Balita
    </a>
</div><br>

<div class="row">
    <div class="col-12">
        <section class="card">
            <header class="card-header text-uppercase" style="height: 70px;">
                <form action="{{ url('admin/bayi/periksa') }}" method="GET"
                    class="form-horizontal form-label-left mb-4">
                    <div class="col-md-12">
                        <div class="input-group mb-2">
                            <input name="search" type="text" class="form-control" value="{{ request('search') }}"
                                placeholder="Cari Bayi Berdasarkan Nama Anak/Nama Ibu" required>
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
                                    <a href="{{ url('admin/bayi/periksa') }}" class="btn btn-secondary btn-icon-split">
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
        <h4 class="header-title mb-3">Daftar Pemeriksaan Bayi Balita</h4>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="table-responsive">
                <table class="table table-hover table-centered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Ibu</th>
                            <th>NIK Ibu</th>
                            <th>Nama Anak</th>
                            <th>Hari / Tanggal</th>
                            <th>Umur (bulan)</th>
                            <th>Berat Badan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($periksaBayi as $item)
                            <tr>
                                <td>{{ ($periksaBayi->currentPage() - 1) * $periksaBayi->perPage() + $loop->iteration }}</td>
                                <td>{{ $item->anak->identitas->ibu_nama ?? '-' }}</td>
                                <td>{{ $item->anak->identitas->ibu_nik ?? '-' }}</td>
                                <td>{{ $item->anak->anak_nama ?? '-' }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal_pemeriksaan)->translatedFormat('l, d F Y') }}</td>
                                <td>{{ $item->umur_bulan ?? '-' }}</td>
                                <td>{{ $item->berat_badan ?? '-' }} kg</td>
                                <td>
                                    <a href="{{ url('admin/bayi/periksa/show', $item->id) }}"
                                        class="btn btn-dark btn-sm">Show</a>
                                    <a href="{{ url('admin/bayi/periksa/edit', $item->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{ url('admin/bayi/periksa/delete', $item->id) }}"
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

            @if ($periksaBayi->hasPages())
                <div class="pagination-container mt-3">
                    {{ $periksaBayi->withQueryString()->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
