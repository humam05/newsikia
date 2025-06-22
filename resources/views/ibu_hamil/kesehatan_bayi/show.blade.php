@extends('ibu_hamil.layouts.base')

@section('content')
    <style>
        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }

        .form-col {
            flex: 1;
        }

        label {
            display: block;
            font-weight: 500;
            margin-bottom: 6px;
            color: #444;
        }

        .detail-value {
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #f1f1f1;
        }

        h4.header-title {
            font-size: 24px;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        h2 {
            margin-top: 20px;
            font-size: 20px;
            color: #2c3e50;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 5px;
        }

        @media (max-width: 600px) {
            .form-row {
                flex-direction: column;
            }
        }
    </style>

    <div class="row">
        <div class="col-12">
            <h4 class="header-title mb-3">Detail Pemeriksaan Bayi Balita</h4>
        </div>
    </div>

    <div class="form-row">
        <div class="form-col">
            <label>Nama Anak</label>
            <div class="detail-value">{{ $periksaBayi->anak->anak_nama ?? '-' }}</div>
        </div>
        <div class="form-col">
            <label>NIK Anak</label>
            <div class="detail-value">{{ $periksaBayi->anak->anak_nik ?? '-' }}</div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-col">
            <label>Tanggal Pemeriksaan</label>
            <div class="detail-value">{{ \Carbon\Carbon::parse($periksaBayi->tanggal_pemeriksaan)->translatedFormat('l, d F Y') }}</div>
        </div>
        <div class="form-col">
            <label>Umur (bulan)</label>
            <div class="detail-value">{{ $periksaBayi->umur_bulan }} bulan</div>
        </div>
    </div>

    <h2>Data Pemeriksaan Fisik</h2>
    <div class="form-row">
        <div class="form-col">
            <label>Berat Badan (kg)</label>
            <div class="detail-value">{{ $periksaBayi->berat_badan }}</div>
        </div>
        <div class="form-col">
            <label>Tinggi Badan (cm)</label>
            <div class="detail-value">{{ $periksaBayi->tinggi_badan }}</div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-col">
            <label>Lingkar Kepala (cm)</label>
            <div class="detail-value">{{ $periksaBayi->lingkar_kepala }}</div>
        </div>
        <div class="form-col">
            <label>Lingkar Lengan Atas (cm)</label>
            <div class="detail-value">{{ $periksaBayi->lingkar_lengan }}</div>
        </div>
    </div>

    <h2>Imunisasi dan Vitamin</h2>
    <div class="form-row">
        <div class="form-col">
            <label>Imunisasi Diberikan</label>
            <div class="detail-value">{{ $periksaBayi->imunisasi ?? '-' }}</div>
        </div>
        <div class="form-col">
            <label>Vitamin A</label>
            <div class="detail-value">{{ $periksaBayi->vitamin_a ?? '-' }}</div>
        </div>
    </div>

    <a href="{{ url('ibu_hamil/kesehatan_bayi') }}" class="btn btn-secondary mt-3">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
@endsection
