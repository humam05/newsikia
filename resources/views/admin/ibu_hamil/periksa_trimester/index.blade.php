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
                    <form action="{{ url('admin/ibu_hamil/periksa_trimester') }}" method="GET"
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
                                        <a href="{{ url('admin/ibu_hamil/periksa_trimester') }}"
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
                <h4 class="header-title mb-3">Daftar Pemeriksaan Trimester</h4>
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
                                <th>Trimester</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($periksa_trimester as $item)
                                <tr>
                                    <td>{{ ($periksa_trimester->currentPage() - 1) * $periksa_trimester->perPage() + $loop->iteration }}
                                    </td>
                                    <td>{{ $item->identitas->ibu_nama ?? '-' }}</td>
                                    <td>{{ $item->identitas->ibu_nik ?? '-' }}</td>
                                    <td>{{ $item->trimester }}</td>
                                    <td>
                                        <a href="{{ url('admin/ibu_hamil/periksa_trimester/show', $item->id) }}?step=trimester{{ $item->trimester }}"
                                            class="btn btn-dark btn-sm">Show</a>

                                        <a href="{{ url('admin/ibu_hamil/periksa_trimester/edit', $item->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ url('admin/ibu_hamil/periksa_trimester/delete', $item->id) }}"
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
                @if ($periksa_trimester->hasPages())
                    <div class="pagination-container mt-3">
                        {{ $periksa_trimester->withQueryString()->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
