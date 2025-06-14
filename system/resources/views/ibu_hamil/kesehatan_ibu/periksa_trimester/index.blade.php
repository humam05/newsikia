@extends('ibu_hamil.layouts.base')
@section('content')
    <style>
        .button-container {
            display: flex;
            justify-content: flex-start;
        }
    </style>

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
                <div class="table-responsive">
                    <table class="table table-hover mails m-0 table-centered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Ibu</th>
                                <th>NIK</th>
                                <th>Hari / Tanggal</th>
                                <th>Trimester</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($periksa_trimester as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->identitas->ibu_nama ?? '-' }}</td>
                                    <td>{{ $item->identitas->ibu_nik ?? '-' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->tanggal_periksa)->translatedFormat('l, d F Y') }}
                                    </td>
                                    <td>{{ $item->trimester }}</td>
                                    <td>
                                        <a href="{{ url('ibu_hamil/kesehatan_ibu/periksa_trimester/show', $item->id) }}"
                                            class="btn btn-dark btn-sm">Show</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">Data tidak ditemukan</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
