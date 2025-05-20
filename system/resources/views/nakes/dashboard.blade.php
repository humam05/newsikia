@extends('nakes.layouts.base')
@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h4 class="header-title mb-3">Selamat Datang di SIKIA Kabupaten Ketapang</h4>
            </div>
        </div>
    </div>
    <!-- Form Pencarian -->
    <div class="row">
        <div class="col-12">
            <section class="card">
                <header class="card-header text-uppercase" style="height: 70px;">
                    <form action="{{ url('nakes/ibu_hamil/identitas') }}" method="GET"
                        class="form-horizontal form-label-left mb-4">
                        <div class="col-md-12">
                            <div class="input-group mb-2">
                                <input name="search" type="text" class="form-control" value="{{ request('search') }}"
                                    placeholder="Cari Pasien Berdasarkan NO.KK / NIK"  maxlength="16" minlength="16"
                                    required>
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
                                        <a href="{{ url('nakes/dashboard') }}"
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

    <div class="row row justify-content-center">
        <div class="col-8">
            <div>
                <div class="card-box widget-inline">
                    <div class="row">
                        <div class="col-sm-6 widget-inline-box">
                            <div class="text-center p-3">
                                <h2 class="mt-2">
                                    <i class="mdi mdi-baby text-info mr-2"></i>
                                    <b>6521</b>
                                </h2>
                                <p class="text-muted mb-0">Total Bayi</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-center p-3">
                                <h2 class="mt-2">
                                    <i class="fas fa-users text-danger mr-2"></i>
                                    <b>{{ $totalIbuHamil }}</b>
                                </h2>
                                <p class="text-muted mb-0">Total Ibu Hamil</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--end row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h5 class="mt-0 font-14 mb-3">Ibu Hamil</h5>
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
                            <a href="{{ url('ibu_hamil/identitas/show', $item->id) }}" class="btn btn-dark btn-sm">Show</a>
                            <a href="{{ url('ibu_hamil/identitas/edit', $item->id) }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ url('ibu_hamil/identitas/delete', $item->id) }}" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                            <a href="{{ url('nakes/ibu_hamil/periksa_rutin') }}" class="btn btn-success btn-sm">Periksa Rutin</a>
                            <a href="{{ url('nakes/ibu_hamil/periksa_trimester') }}" class="btn btn-info btn-sm">Periksa Trimester</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
