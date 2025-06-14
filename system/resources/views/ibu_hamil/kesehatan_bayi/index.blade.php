@extends('ibu_hamil.layouts.base')
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
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->anak->identitas->ibu_nama ?? '-' }}</td>
                                    <td>{{ $item->anak->identitas->ibu_nik ?? '-' }}</td>
                                    <td>{{ $item->anak->anak_nama ?? '-' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->tanggal_pemeriksaan)->translatedFormat('l, d F Y') }}
                                    </td>
                                    <td>{{ $item->umur_bulan ?? '-' }}</td>
                                    <td>{{ $item->berat_badan ?? '-' }} kg</td>
                                    <td>
                                        <a href="{{ url('ibu_hamil/kesehatan_bayi/show', $item->id) }}"
                                            class="btn btn-dark btn-sm">Show</a>
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
            </div>
        </div>
    </div>
@endsection
