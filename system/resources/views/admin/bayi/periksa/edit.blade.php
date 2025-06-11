@extends('admin.layouts.base')

@section('content')
<style>
    /* Style sama seperti form create */
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

    input[type="text"],
    input[type="number"],
    input[type="date"],
    select,
    textarea {
        width: 100%;
        padding: 8px 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        background-color: #fefefe;
        box-sizing: border-box;
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

    button {
        margin-top: 25px;
        padding: 10px 20px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 6px;
    }

    button:hover {
        background-color: #2980b9;
    }

    @media (max-width: 600px) {
        .form-row {
            flex-direction: column;
        }
    }
</style>

<div class="row">
    <div class="col-12">
        <h4 class="header-title mb-3">Edit Pemeriksaan Bayi Balita</h4>
    </div>
</div>

<form action="{{ url('admin/bayi/periksa/update/'.$periksaBayi->id) }}" method="POST">
    @csrf

    <input type="hidden" name="identitas_id" value="{{ $periksaBayi->identitas_id }}">

    <div class="form-row">
        <div class="form-col">
            <label>Nama Anak</label>
            <input type="text" class="form-control" value="{{ $periksaBayi->identitas->anak_nama }}" readonly>
        </div>
        <div class="form-col">
            <label>NIK Anak</label>
            <input type="text" class="form-control" value="{{ $periksaBayi->identitas->anak_nik }}" readonly>
        </div>
    </div>

    <div class="form-row">
        <div class="form-col">
            <label for="tanggal_pemeriksaan">Tanggal Pemeriksaan</label>
            <input type="date" name="tanggal_pemeriksaan" value="{{ old('tanggal_pemeriksaan', $periksaBayi->tanggal_pemeriksaan) }}">
        </div>
        <div class="form-col">
            <label for="umur_bulan">Umur (bulan)</label>
            <input type="number" name="umur_bulan" value="{{ old('umur_bulan', $periksaBayi->umur_bulan) }}" min="0">
        </div>
    </div>

    <h2>Data Pemeriksaan Fisik</h2>
    <div class="form-row">
        <div class="form-col">
            <label for="berat_badan">Berat Badan (kg)</label>
            <input type="text" name="berat_badan" value="{{ old('berat_badan', $periksaBayi->berat_badan) }}">
        </div>
        <div class="form-col">
            <label for="tinggi_badan">Tinggi Badan (cm)</label>
            <input type="text" name="tinggi_badan" value="{{ old('tinggi_badan', $periksaBayi->tinggi_badan) }}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-col">
            <label for="lingkar_kepala">Lingkar Kepala (cm)</label>
            <input type="text" name="lingkar_kepala" value="{{ old('lingkar_kepala', $periksaBayi->lingkar_kepala) }}">
        </div>
        <div class="form-col">
            <label for="lingkar_lengan">Lingkar Lengan Atas (cm)</label>
            <input type="text" name="lingkar_lengan" value="{{ old('lingkar_lengan', $periksaBayi->lingkar_lengan) }}">
        </div>
    </div>

    <h2>Imunisasi dan Vitamin</h2>
    <div class="form-row">
        <div class="form-col">
            <label for="imunisasi">Imunisasi Diberikan</label>
            <select name="imunisasi">
                @php
                    $imunisasiOptions = [
                        'BCG', 'Hepatitis B', 'Polio',
                        'DPT-HB-Hib 1', 'DPT-HB-Hib 2', 'DPT-HB-Hib 3',
                        'Campak', 'Campak-Rubella', 'Booster DPT', 'Booster Polio', 'Tidak Ada'
                    ];
                @endphp
                <option value="">-- Pilih --</option>
                @foreach ($imunisasiOptions as $opt)
                    <option value="{{ $opt }}" {{ old('imunisasi', $periksaBayi->imunisasi) == $opt ? 'selected' : '' }}>
                        {{ $opt }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-col">
            <label for="vitamin_a">Vitamin A</label>
            <select name="vitamin_a">
                <option value="">-- Pilih --</option>
                <option value="Biru" {{ old('vitamin_a', $periksaBayi->vitamin_a) == 'Biru' ? 'selected' : '' }}>Biru</option>
                <option value="Merah" {{ old('vitamin_a', $periksaBayi->vitamin_a) == 'Merah' ? 'selected' : '' }}>Merah</option>
            </select>
        </div>
    </div>

    <button type="submit">Update Pemeriksaan</button>
</form>
@endsection
