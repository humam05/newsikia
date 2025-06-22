@extends('nakes.layouts.base')

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

            h2 {
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
                  <h2>Identitas Ibu</h2>
                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">Nama Ibu</label>
                        <div class="detail-value">{{ $identitas->ibu_nama ?? '-' }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">NIK Ibu</label>
                        <div class="detail-value">{{ $identitas->ibu_nik ?? '-' }}</div>
                    </div>
                </div>
                <h2>Identitas Anak</h2>
                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">Nama</label>
                        <div class="detail-value">{{ $anak->anak_nama }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">NIK</label>
                        <div class="detail-value">{{ $anak->anak_nik }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">No. JKN</label>
                        <div class="detail-value">{{ $anak->anak_jkn }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">Fasilitas Kesehatan TK1</label>
                        <div class="detail-value">{{ $anak->anak_faskes_tk1 }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">Fasilitas Kesehatan Rujukan</label>
                        <div class="detail-value">{{ $anak->anak_faskes_rujukan }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">Tempat Lahir</label>
                        <div class="detail-value">{{ $anak->anak_tempat_lahir }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">Tanggal Lahir</label>
                        <div class="detail-value">{{ $anak->anak_tanggal_lahir }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">Alamat Rumah</label>
                        <div class="detail-value">{{ $anak->anak_alamat }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">Anak ke-</label>
                        <div class="detail-value">{{ $anak->anak_ke }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">Nomor Akta Kelahiran</label>
                        <div class="detail-value">{{ $anak->anak_akta_kelahiran }}</div>
                    </div>
                </div>
                <div class="detail-group">
                    <label class="detail-label">Golongan Darah</label>
                    <div class="detail-value">{{ $anak->anak_gol_darah }}</div>
                </div>

                <div class="d-flex mt-3">
                    <a href="{{ url('nakes/bayi/identitas') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </body>
@endsection
