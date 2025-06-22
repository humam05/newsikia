@extends('nakes.layouts.base')

@section('content')
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f7f9fb;
            color: #333;
        }

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
            transition: border-color 0.2s ease;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: #3498db;
            outline: none;
        }

        textarea {
            resize: vertical;
            min-height: 60px;
        }

        button {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 20px;
            font-size: 14px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
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

        h3 {
            margin-top: 15px;
            font-size: 18px;
            color: #2c3e50;
        }

        @media (max-width: 600px) {
            .form-row {
                flex-direction: column;
            }
        }
    </style>

    <div class="row">
        <div class="col-12">
            <h4 class="header-title mb-3">Form Pemeriksaan Bayi Balita</h4>
        </div>
    </div>

    <form action="{{ url('nakes/bayi/periksa/store') }}" method="POST">
        @csrf

        <input type="hidden" name="anak_id" value="{{ $anak->id }}">


<div class="form-row">
    <div class="form-col">
        <label>Nama Anak</label>
        <input type="text" class="form-control" value="{{ $anak->anak_nama }}" readonly>
    </div>
    <div class="form-col">
        <label>NIK Anak</label>
        <input type="text" class="form-control" value="{{ $anak->anak_nik }}" readonly>
    </div>
</div>
        <div class="form-row">
            <div class="form-col">
                <label for="tanggal_pemeriksaan">Tanggal Pemeriksaan</label>
                <input type="date" name="tanggal_pemeriksaan" id="tanggal_pemeriksaan"
                    value="{{ old('tanggal_pemeriksaan') }}" required>
            </div>
            <div class="form-col">
                <label for="umur_bulan">Umur (bulan)</label>
                <input type="number" name="umur_bulan" id="umur_bulan" class="form-control" value="{{ old('umur_bulan') }}"
                    min="0" placeholder="Contoh: 5">
            </div>
        </div>
        <h2>Data Pemeriksaan Fisik</h2>

        <div class="form-row">
            <div class="form-col">
                <label for="berat_badan">Berat Badan (kg)</label>
                <input type="text" name="berat_badan" id="berat_badan" value="{{ old('berat_badan') }}">
            </div>
            <div class="form-col">
                <label for="tinggi_badan">Tinggi Badan (cm)</label>
                <input type="text" name="tinggi_badan" id="tinggi_badan" value="{{ old('tinggi_badan') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-col">
                <label for="lingkar_kepala">Lingkar Kepala (cm)</label>
                <input type="text" name="lingkar_kepala" id="lingkar_kepala" value="{{ old('lingkar_kepala') }}">
            </div>
            <div class="form-col">
                <label for="lingkar_lengan">Lingkar Lengan Atas (cm)</label>
                <input type="text" name="lingkar_lengan" id="lingkar_lengan" value="{{ old('lingkar_lengan') }}">
            </div>
        </div>
        <h2>Imunisasi dan Vitamin</h2>
        <div class="form-row">
            <div class="form-col">
                <label for="imunisasi">Imunisasi Diberikan</label>
                <select name="imunisasi" id="imunisasi">
                    <option value="">-- Pilih --</option>
                    @php
                        $imunisasiOptions = [
                            'BCG',
                            'Hepatitis B',
                            'Polio',
                            'DPT-HB-Hib 1',
                            'DPT-HB-Hib 2',
                            'DPT-HB-Hib 3',
                            'Campak',
                            'Campak-Rubella',
                            'Booster DPT',
                            'Booster Polio',
                            'Tidak Ada',
                        ];
                    @endphp
                    @foreach ($imunisasiOptions as $imun)
                        <option value="{{ $imun }}" {{ old('imunisasi') == $imun ? 'selected' : '' }}>
                            {{ $imun }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-col">
                <label for="vitamin_a">Vitamin A</label>
                <select name="vitamin_a" id="vitamin_a">
                    <option value="">-- Pilih --</option>
                    <option value="Biru" {{ old('vitamin_a') == 'Biru' ? 'selected' : '' }}>Biru</option>
                    <option value="Merah" {{ old('vitamin_a') == 'Merah' ? 'selected' : '' }}>Merah</option>
                </select>
            </div>
        </div>

        <button type="submit">Simpan Pemeriksaan</button>
    </form>
@endsection
