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
                    <form action="{{ url('nakes/dashboard') }}" method="GET" class="form-horizontal form-label-left mb-4">
                        <div class="col-md-12">
                            <div class="input-group mb-2">
                                <input name="cari" type="search" class="form-control" id="inlineFormInputGroup"
                                    placeholder="Cari Pasien Berdasarkan NO.KK / NIK" value="{{ request('cari') }}">
                                <div class="input-group-prepend ml-1">
                                    <button type="submit" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white">
                                            <i class="fas fa-search"></i>
                                        </span>
                                        <span class="text">Cari Akun</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </header>
            </section>
        </div>
    </div>

    <!-- Tabel Hasil Pencarian -->
    <div class="row mt-3">
        <div class="col-12">
            <section class="card">
                <header class="card-header">
                    <h5>Hasil Pencarian</h5>
                </header>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>No. KK</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ortu as $key => $o)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $o->nik }}</td>
                                <td>{{ $o->no_kk }}</td>
                                <td>{{ $o->nama }}</td>
                                <td>
                                    <a href="{{ url('nakes/ortu/'.$o->id) }}" class="btn btn-sm btn-primary">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if($ortu->isEmpty())
                        <p class="text-center">Tidak ada data ditemukan.</p>
                    @endif
                </div>
            </section>
        </div>
    </div>
@endsection
