@extends('puskesmas.layouts.base')

@section('content')
    <style>
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }

        .card-item {
            display: flex;
            flex-direction: column;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }

        .card-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
            background-color: #f0f0f0;
        }

        .card-body {
            flex: 1;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-title {
            font-size: 1.05rem;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        .card-text {
            font-size: 0.85rem;
            margin-bottom: 4px;
            color: #666;
        }

        .card-actions {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            gap: 6px;
        }

        .btn-sm {
            font-size: 0.75rem;
            padding: 4px 8px;
        }

        .header-title {
            font-size: 1.4rem;
            font-weight: bold;
        }
    </style>
    <div class="row">
        <div class="col-12">
            <section class="card">
                <header class="card-header text-uppercase" style="height: 70px;">
                    <form action="{{ url('puskesmas/jadwal_posyandu_puskesmas') }}" method="GET" class="form-horizontal form-label-left mb-4">
                        <div class="col-md-12">
                            <div class="input-group mb-2">
                                <input name="search" type="text" class="form-control" value="{{ request('search') }}"
                                    placeholder="Cari Nama Posyandu / Nama Fasyankes" required>
                                <div class="input-group-prepend ml-1">
                                    <button type="submit" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white">
                                            <i class="fas fa-search"></i>
                                        </span>
                                        <span class="text">Cari Posyandu</span>
                                    </button>
                                </div>
                                @if (request('search'))
                                    <div class="input-group-prepend ml-1">
                                        <a href="{{ url('puskesmas/jadwal_posyandu_puskesmas') }}" class="btn btn-secondary btn-icon-split">
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
            <h4 class="header-title mb-3">Data Posyandu</h4>
            <div class="button-container" style="text-align: right;">
                <a href="{{ url('/puskesmas/jadwal_posyandu_puskesmas/create') }}" class="btn btn-primary">Tambah Jadwal Posyandu</a>
            </div>
        </div>
    </div>

    <div class="card-container">
        @foreach ($posyandu as $item)
            <div class="card-item">
                @if ($item->foto)
                    <img src="{{ asset('system/storage/app/public/posyandu/' . $item->foto) }}" alt="Foto Posyandu" class="card-image">
                @else
                    <img src="https://via.placeholder.com/300x150?text=No+Image" alt="No Image" class="card-image">
                @endif

                <div class="card-body">
                    <div>
                        <div class="card-title">{{ $item->nama_posyandu }}</div>
                        <div class="card-text"><strong>Tanggal:</strong>
                            {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</div>
                        <div class="card-text"><strong>Waktu:</strong> {{ $item->waktu }}</div>
                        <div class="card-text"><strong>Lokasi:</strong> {{ $item->lokasi }}</div>
                        <div class="card-text"><strong>Fasyankes:</strong> {{ $item->nama_fasyankes }}</div>
                    </div>
                    <div class="card-actions">
                        <a href="{{ url('puskesmas/jadwal_posyandu_puskesmas/edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ url('puskesmas/jadwal_posyandu_puskesmas/delete', $item->id) }}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
