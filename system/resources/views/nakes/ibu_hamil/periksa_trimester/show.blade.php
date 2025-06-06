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
                <h1>Detail Pemeriksaan Trimester Ibu {{ $periksaTrimester->identitas->ibu_nama ?? '-' }}</h1>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-female"></i> Nama Ibu</label>
                        <div class="detail-value">{{ $periksaTrimester->identitas->ibu_nama ?? '-' }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-id-card-alt"></i> NIK</label>
                        <div class="detail-value">{{ $periksaTrimester->identitas->ibu_nik ?? '-' }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-calendar-alt"></i> Tanggal Periksa</label>
                        <div class="detail-value">
                            {{ \Carbon\Carbon::parse($periksaTrimester->tanggal_periksa)->translatedFormat('l, d F Y') }}
                        </div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-hourglass-half"></i> Trimester</label>
                        <div class="detail-value">{{ $periksaTrimester->trimester }} </div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-eye"></i> Konjungtiva</label>
                        <div class="detail-value">{{ $periksaTrimester->konjungtiva }} </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-eye-dropper"></i> Sklera</label>
                        <div class="detail-value">{{ $periksaTrimester->sklera }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-paint-roller"></i> Kulit</label>
                        <div class="detail-value">{{ $periksaTrimester->kulit }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-neck"></i> Leher</label> {{-- icon neck tidak ada di FontAwesome, gunakan tulang leher --}}
                        <div class="detail-value">{{ $periksaTrimester->leher }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-tooth"></i> Gigi/Mulut</label>
                        <div class="detail-value">{{ $periksaTrimester->gigi_mulut }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-head-side-mask"></i> THT</label>
                        <div class="detail-value">{{ $periksaTrimester->tht }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-heart"></i> Dada (Jantung)</label>
                        <div class="detail-value">{{ $periksaTrimester->dada }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-lungs"></i> Paru</label>
                        <div class="detail-value">{{ $periksaTrimester->paru }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-stomach"></i> Perut</label>
                        <div class="detail-value">{{ $periksaTrimester->perut }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-shoe-prints"></i> Tungkai</label>
                        <div class="detail-value">{{ $periksaTrimester->tungkai }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-calendar-check"></i> HPHT</label>
                        <div class="detail-value">{{ $periksaTrimester->hpht }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-venus-mars"></i> Keterangan Haid</label>
                        <div class="detail-value">{{ $periksaTrimester->keterangan_haid }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-baby"></i> Umur Kehamilan Berdasarkan HPHT (Minggu)</label>
                        <div class="detail-value">{{ $periksaTrimester->umur_kehamilan_hpht }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-calendar-day"></i> HPL Berdasarkan HPHT</label>
                        <div class="detail-value">{{ $periksaTrimester->hpl_hpht }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-baby-carriage"></i> Umur Kehamilan Berdasarkan USG (Minggu)</label>
                        <div class="detail-value">{{ $periksaTrimester->umur_kehamilan_usg }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-calendar-alt"></i> HPL Berdasarkan USG</label>
                        <div class="detail-value">{{ $periksaTrimester->hpl_usg }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-circle"></i> Jumlah GS/Kantung Kehamilan</label>
                        <div class="detail-value">{{ $periksaTrimester->jumlah_gs }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-ruler-combined"></i> Diameter GS/Kantung Kehamilan</label>
                        <div class="detail-value">{{ $periksaTrimester->diameter_gs }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> GS Sesuai Umur Kehamilan</label>
                        <div class="detail-value">{{ $periksaTrimester->umur_diameter_gs }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-ruler"></i> CRL/Jarak Puncak Kepala Bokong (mm)</label>
                        <div class="detail-value">{{ $periksaTrimester->crl }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-calendar-check"></i> CRL Sesuai Umur Kehamilan</label>
                        <div class="detail-value">{{ $periksaTrimester->umur_crl }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-baby"></i> Jumlah Bayi</label>
                        <div class="detail-value">{{ $periksaTrimester->jumlah_bayi }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-map-marker-alt"></i> Letak Produk Kehamilan</label>
                        <div class="detail-value">{{ $periksaTrimester->letak_produk_kehamilan }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-heartbeat"></i> Pulsasi Jantung</label>
                        <div class="detail-value">{{ $periksaTrimester->pulsasi_jantung }}</div>
                    </div>
                </div>

                <div class="detail-group">
                    <label class="detail-label"><i class="fas fa-exclamation-triangle"></i> Temuan Abnormal</label>
                    <div class="detail-value">
                        {{ $periksaTrimester->temuan_abnormal == 'ya' ? 'Ya' : ($periksaTrimester->temuan_abnormal == 'tidak' ? 'Tidak' : '-') }}
                    </div>
                </div>

                @if($periksaTrimester->temuan_abnormal == 'ya')
                    <div class="detail-group">
                        <label class="detail-label"><i class="fas fa-pen"></i> Sebutkan Temuan Abnormal</label>
                        <div class="detail-value">{{ $periksaTrimester->temuan_abnormal_sebutkan }}</div>
                    </div>
                @endif

                <h5>Pemeriksaan Laboratorium</h5>
                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-tint"></i> Hemoglobin (g/dL)</label>
                        <div class="detail-value">{{ $periksaTrimester->hemoglobin }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-tint-slash"></i> Golongan Darah</label>
                        <div class="detail-value">{{ $periksaTrimester->golongan_darah }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-vial"></i> Rhesus</label>
                        <div class="detail-value">{{ $periksaTrimester->rhesus }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-syringe"></i> Gula Darah Sewaktu (mg/dL)</label>
                        <div class="detail-value">{{ $periksaTrimester->gula_darah_sewaktu }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-virus"></i> Hasil HIV</label>
                        <div class="detail-value">{{ ucfirst($periksaTrimester->hasil_h) }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-virus-slash"></i> Hasil Sifilis</label>
                        <div class="detail-value">{{ ucfirst($periksaTrimester->hasil_s) }}</div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-lungs-virus"></i> Hasil Hepatitis B</label>
                        <div class="detail-value">{{ ucfirst($periksaTrimester->hasil_hepatitis_b) }}</div>
                    </div>
                </div>

                <h5>Skrining Kesehatan Jiwa</h5>
                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-brain"></i> Skrining Dilakukan?</label>
                        <div class="detail-value">{{ ucfirst($periksaTrimester->skrining_kesehatan_jiwa) }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-arrow-right"></i> Tindak Lanjut</label>
                        <div class="detail-value">{{ $periksaTrimester->tindak_lanjut_jiwa }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-share-square"></i> Perlu Rujukan?</label>
                        <div class="detail-value">{{ ucfirst($periksaTrimester->perlu_rujukan) }}</div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-file-alt"></i> Kesimpulan</label>
                        <div class="detail-value" style="white-space: pre-wrap;">{{ $periksaTrimester->kesimpulan }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-file-medical"></i> Rekomendasi</label>
                        <div class="detail-value" style="white-space: pre-wrap;">{{ $periksaTrimester->rekomendasi }}</div>
                    </div>
                </div>

                <div class="d-flex mt-3">
                    <a href="{{ url('nakes/ibu_hamil/periksa_trimester') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </body>
@endsection
