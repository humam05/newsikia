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
                <h1>Detail Pemeriksaan Rutin Ibu {{ $periksaRutin->identitas->ibu_nama ?? '-' }}</h1>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-user"></i> Nama Ibu</label>
                        <div class="detail-value">{{ $periksaRutin->identitas->ibu_nama ?? '-' }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-id-card"></i> NIK</label>
                        <div class="detail-value">{{ $periksaRutin->identitas->ibu_nik ?? '-' }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-calendar-day"></i> Tanggal Periksa</label>
                        <div class="detail-value">
                            {{ \Carbon\Carbon::parse($periksaRutin->tanggal_periksa)->translatedFormat('l, d F Y') }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-weight"></i> Berat Badan</label>
                        <div class="detail-value">{{ $periksaRutin->berat_badan }} kg</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-ruler-vertical"></i> Tinggi Badan</label>
                        <div class="detail-value">{{ $periksaRutin->tinggi }} cm</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-arrows-alt-h"></i> Lingkar Lengan</label>
                        <div class="detail-value">{{ $periksaRutin->lingkar_lengan }} cm</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-baby"></i> Umur Kehamilan</label>
                        <div class="detail-value">{{ $periksaRutin->umur_kehamilan }} minggu</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-ruler-combined"></i> Tinggi Fundus</label>
                        <div class="detail-value">{{ $periksaRutin->tfu }} cm</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-heartbeat"></i> DJJ (Detak Jantung Janin)</label>
                        <div class="detail-value">{{ $periksaRutin->djj }} bpm</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> Gerakan Janin</label>
                        <div class="detail-value">{{ $periksaRutin->gerakan_janin }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-baby-carriage"></i> Posisi Janin</label>
                        <div class="detail-value">{{ $periksaRutin->posisi_janin }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-shoe-prints"></i> Kaki Bengkak</label>
                        <div class="detail-value">{{ $periksaRutin->kaki_bengkak }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-comment-dots"></i> Keluhan</label>
                        <div class="detail-value">{{ $periksaRutin->keluhan }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-sticky-note"></i> Catatan</label>
                        <div class="detail-value">{{ $periksaRutin->catatan }}</div>
                    </div>
                </div>

                <div class="d-flex mt-3">
                    <a href="{{ url('admin/ibu_hamil/periksa_rutin') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </body>
@endsection
