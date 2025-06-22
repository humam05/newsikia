@extends('admin.layouts.base')

@section('content')

    <head>
        <style>
            body {
                background-color: #f4f6f9;
                font-family: Arial, sans-serif;
            }

            .container {
                max-width: 100%;
                margin-top: 5%;
            }

            .card {
                padding: 2rem;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
                border: none;
                border-radius: 10px;
                background-color: #ffffff;
            }

            .form-label {
                font-weight: 600;
            }

            .detail-label {
                font-weight: 600;
                margin-bottom: 0.5rem;
                color: #333;
            }

            .detail-value {
                padding: 0.75rem 1rem;
                background-color: #f8f9fa;
                border-radius: 5px;
                box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05);
            }

            .btn-success {
                background: #28a745;
                font-weight: bold;
                padding: 10px 20px;
                border: none;
            }

            .btn-secondary {
                font-weight: bold;
                padding: 10px 20px;
                border: none;
                background-color: #6c757d;
                color: white;
            }

            .btn-secondary:hover {
                background-color: #5a6268;
            }

            .btn i {
                margin-right: 5px;
            }

            h1 {
                text-align: center;
                margin-bottom: 2rem;
            }

            .detail-group {
                margin-bottom: 1.5rem;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="card">
                <h1>Detail Data Tenaga Kesehatan</h1>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-user-nurse"></i> Nama </label>
                        <div class="detail-value">{{ $bidan->nama_bidan }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-id-card"></i> NIK</label>
                        <div class="detail-value">{{ $bidan->nik }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-phone"></i> No. Telepon</label>
                        <div class="detail-value">{{ $bidan->no_telpon }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-envelope"></i> Email</label>
                        <div class="detail-value">{{ $bidan->email }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-hospital"></i> Nama Fasyankes</label>
                        <div class="detail-value">
                            {{ $bidan->fasyankes->nama ?? '-' }}
                        </div>

                    </div>


                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-map-marker-alt"></i> Tempat Lahir</label>
                        <div class="detail-value">{{ $bidan->tempat_lahir }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-calendar-alt"></i> Tanggal Lahir</label>
                        <div class="detail-value">{{ $bidan->tanggal_lahir }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-map"></i> Alamat Lengkap</label>
                        <div class="detail-value">{{ $bidan->alamat_lengkap }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-globe-asia"></i> Provinsi</label>
                        <div class="detail-value">{{ $bidan->provinsi }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-city"></i> Kabupaten</label>
                        <div class="detail-value">{{ $bidan->kabupaten }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-map-signs"></i> Kecamatan</label>
                        <div class="detail-value">{{ $bidan->kecamatan }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-home"></i> Desa</label>
                        <div class="detail-value">{{ $bidan->desa }}</div>
                    </div>
                </div>

                <div class="d-flex mt-3">
                    <a href="{{ url('admin/bidan') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </body>
@endsection
