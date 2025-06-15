@extends('nakes.layouts.base')
@section('content')
    <style>
        .button-container {
            display: flex;
            justify-content: flex-end;
        }
    </style>
    <div class="row">
        <div class="col-12">
            <section class="card">
                <header class="card-header text-uppercase" style="height: 70px;">
                    <form action="{{ url('nakes/ibu_hamil/identitas') }}" method="GET"
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
                                        <a href="{{ url('nakes/ibu_hamil/identitas') }}"
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
    <div class="row">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">Data Ibu Hamil</h4>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="button-container">
                    {{-- <a href="{{ url('/nakes/ibu_hamil/identitas/create') }}" class="btn btn-primary">
                        Tambah Data
                    </a> --}}
                    <!-- Bagian tombol tambah data -->
                    @php
                        $search = request('search');
                        $hasResults = isset($identitas) && $identitas->count() > 0;
                    @endphp
                    @if (!($search && $hasResults))
                        {{-- <a href="{{ url('nakes/ibu_hamil/identitas/create') }}" class="btn btn-primary">
                            Tambah Data
                        </a> --}}
                    @endif
                </div><br>
                <div class="table-responsive">
                    <table class="table table-hover mails m-0 table table-actions-bar table-centered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Ibu</th>
                                <th>Nik Ibu</th>
                                <th>No. JKN</th>
                                <th>Nama Suami</th>
                                <th>Nama Anak</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($identitas as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->ibu_nama }}</td>
                                    <td>{{ $item->ibu_nik }}</td>
                                    <td>{{ $item->ibu_jkn }}</td>
                                    <td>{{ $item->suami_nama }}</td>
                                    <td>{{ $item->anak_nama }}</td>
                                    <td>
                                        <a href="{{ url('nakes/ibu_hamil/identitas/show', $item->id) }}"
                                            class="btn btn-dark btn-sm">Show</a>
                                        <a href="{{ url('nakes/ibu_hamil/identitas/edit', $item->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ url('nakes/ibu_hamil/identitas/delete', $item->id) }}"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                                        <a href="{{ url('nakes/ibu_hamil/periksa_rutin/create', $item->id) }}"
                                            class="btn btn-success btn-sm">Periksa Rutin</a>
                                        <a href="{{ url('nakes/ibu_hamil/periksa_trimester/create', $item->id) }}"
                                            class="btn btn-info btn-sm">Periksa Trimester</a>
                                             <a href="{{ url('nakes/bayi/identitas/create', $item->id) }}"
                                            class="btn btn-primary btn-sm">+ Data Anak</a>
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
