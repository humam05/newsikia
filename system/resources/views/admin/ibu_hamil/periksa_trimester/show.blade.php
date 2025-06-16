@extends('admin.layouts.base')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
            display: inline-flex;
            align-items: center;
            gap: 8px;
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

        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }
    </style>

    <div class="container">
        <div class="card">
            <h1>Detail Pemeriksaan Trimester Ibu {{ $periksaTrimester->identitas->ibu_nama ?? '-' }}</h1>
            <!-- Stepper Container -->
            <div class="form-step" id="trimester1">
                <h4>Trimester 1</h4>
                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-female" aria-hidden="true"></i> Nama Ibu</label>
                        <div class="detail-value">{{ $periksaTrimester->identitas->ibu_nama ?? '-' }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-id-card-alt" aria-hidden="true"></i> NIK</label>
                        <div class="detail-value">{{ $periksaTrimester->identitas->ibu_nik ?? '-' }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-calendar-alt" aria-hidden="true"></i> Tanggal
                            Periksa</label>
                        <div class="detail-value">
                            {{ $periksaTrimester->tanggal_periksa ? \Carbon\Carbon::parse($periksaTrimester->tanggal_periksa)->translatedFormat('l, d F Y') : '-' }}
                        </div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-eye" aria-hidden="true"></i> Konjungtiva</label>
                        <div class="detail-value">{{ $periksaTrimester->konjungtiva ?? '-' }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-eye-dropper" aria-hidden="true"></i> Sklera</label>
                        <div class="detail-value">{{ $periksaTrimester->sklera ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-paint-roller" aria-hidden="true"></i> Kulit</label>
                        <div class="detail-value">{{ $periksaTrimester->kulit ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-user-neck" aria-hidden="true"></i> Leher</label>

                        <div class="detail-value">{{ $periksaTrimester->leher ?? '-' }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-tooth" aria-hidden="true"></i> Gigi/Mulut</label>
                        <div class="detail-value">{{ $periksaTrimester->gigi_mulut ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-head-side-mask" aria-hidden="true"></i> THT</label>
                        <div class="detail-value">{{ $periksaTrimester->tht ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-heart" aria-hidden="true"></i> Dada
                            (Jantung)</label>
                        <div class="detail-value">{{ $periksaTrimester->dada ?? '-' }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-lungs" aria-hidden="true"></i> Paru</label>
                        <div class="detail-value">{{ $periksaTrimester->paru ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-stomach" aria-hidden="true"></i> Perut</label>
                        <div class="detail-value">{{ $periksaTrimester->perut ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-shoe-prints" aria-hidden="true"></i>
                            Tungkai</label>
                        <div class="detail-value">{{ $periksaTrimester->tungkai ?? '-' }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-calendar-check" aria-hidden="true"></i>
                            HPHT</label>
                        <div class="detail-value">{{ $periksaTrimester->hpht ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-venus-mars" aria-hidden="true"></i> Keterangan
                            Haid</label>
                        <div class="detail-value">{{ $periksaTrimester->keterangan_haid ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-baby" aria-hidden="true"></i> Umur Kehamilan
                            Berdasarkan
                            HPHT (Minggu)</label>
                        <div class="detail-value">{{ $periksaTrimester->umur_kehamilan_hpht ?? '-' }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-calendar-day" aria-hidden="true"></i> HPL
                            Berdasarkan
                            HPHT</label>
                        <div class="detail-value">{{ $periksaTrimester->hpl_hpht ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-baby-carriage" aria-hidden="true"></i> Umur
                            Kehamilan
                            Berdasarkan USG (Minggu)</label>
                        <div class="detail-value">{{ $periksaTrimester->umur_kehamilan_usg ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-calendar-alt" aria-hidden="true"></i> HPL
                            Berdasarkan
                            USG</label>
                        <div class="detail-value">{{ $periksaTrimester->hpl_usg ?? '-' }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-circle" aria-hidden="true"></i> Jumlah
                            GS/Kantung
                            Kehamilan</label>
                        <div class="detail-value">{{ $periksaTrimester->jumlah_gs ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-ruler-combined" aria-hidden="true"></i> Diameter
                            GS/Kantung Kehamilan</label>
                        <div class="detail-value">{{ $periksaTrimester->diameter_gs ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child" aria-hidden="true"></i> GS Sesuai Umur
                            Kehamilan</label>
                        <div class="detail-value">{{ $periksaTrimester->umur_diameter_gs ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-ruler" aria-hidden="true"></i> CRL/Jarak Puncak
                            Kepala
                            Bokong (mm)</label>
                        <div class="detail-value">{{ $periksaTrimester->crl ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-calendar-check" aria-hidden="true"></i> CRL
                            Sesuai
                            Umur
                            Kehamilan</label>
                        <div class="detail-value">{{ $periksaTrimester->umur_crl ?? '-' }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-baby" aria-hidden="true"></i> Jumlah
                            Bayi</label>
                        <div class="detail-value">{{ $periksaTrimester->jumlah_bayi ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Letak
                            Produk
                            Kehamilan</label>
                        <div class="detail-value">{{ $periksaTrimester->letak_produk_kehamilan ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-heartbeat" aria-hidden="true"></i> Pulsasi
                            Jantung</label>
                        <div class="detail-value">{{ $periksaTrimester->pulsasi_jantung ?? '-' }}</div>
                    </div>
                </div>

                <div class="detail-group">
                    <label class="detail-label"><i class="fas fa-exclamation-triangle" aria-hidden="true"></i> Temuan
                        Abnormal</label>
                    <div class="detail-value">
                        {{ $periksaTrimester->temuan_abnormal == 'ya'
                            ? 'Ya'
                            : ($periksaTrimester->temuan_abnormal == 'tidak'
                                ? 'Tidak'
                                : '-') }}
                    </div>
                </div>

                @if ($periksaTrimester->temuan_abnormal == 'ya')
                    <div class="detail-group">
                        <label class="detail-label"><i class="fas fa-pen" aria-hidden="true"></i> Sebutkan Temuan
                            Abnormal</label>
                        <div class="detail-value">{{ $periksaTrimester->temuan_abnormal_sebutkan ?? '-' }}</div>
                    </div>
                @endif

                <h5>Pemeriksaan Laboratorium</h5>
                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-tint" aria-hidden="true"></i> Hemoglobin
                            (g/dL)</label>
                        <div class="detail-value">{{ $periksaTrimester->hemoglobin ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-tint-slash" aria-hidden="true"></i> Golongan
                            Darah</label>
                        <div class="detail-value">{{ $periksaTrimester->golongan_darah ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-vial" aria-hidden="true"></i> Rhesus</label>
                        <div class="detail-value">{{ $periksaTrimester->rhesus ?? '-' }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-syringe" aria-hidden="true"></i> Gula Darah
                            Sewaktu
                            (mg/dL)</label>
                        <div class="detail-value">{{ $periksaTrimester->gula_darah_sewaktu ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-virus" aria-hidden="true"></i> Hasil HIV</label>
                        <div class="detail-value">
                            {{ $periksaTrimester->hasil_h ? ucfirst($periksaTrimester->hasil_h) : '-' }}
                        </div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-virus-slash" aria-hidden="true"></i> Hasil
                            Sifilis</label>
                        <div class="detail-value">
                            {{ $periksaTrimester->hasil_s ? ucfirst($periksaTrimester->hasil_s) : '-' }}
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-lungs-virus" aria-hidden="true"></i> Hasil
                            Hepatitis
                            B</label>
                        <div class="detail-value">
                            {{ $periksaTrimester->hasil_hepatitis_b ? ucfirst($periksaTrimester->hasil_hepatitis_b) : '-' }}
                        </div>
                    </div>
                </div>

                <h5>Skrining Kesehatan Jiwa</h5>
                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-brain" aria-hidden="true"></i> Skrining
                            Dilakukan?</label>
                        <div class="detail-value">
                            {{ $periksaTrimester->skrining_kesehatan_jiwa ? ucfirst($periksaTrimester->skrining_kesehatan_jiwa) : '-' }}
                        </div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-arrow-right" aria-hidden="true"></i> Tindak
                            Lanjut</label>
                        <div class="detail-value">{{ $periksaTrimester->tindak_lanjut_jiwa ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-share-square" aria-hidden="true"></i> Perlu
                            Rujukan?</label>
                        <div class="detail-value">
                            {{ $periksaTrimester->perlu_rujukan ? ucfirst($periksaTrimester->perlu_rujukan) : '-' }}
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-file-alt" aria-hidden="true"></i>
                            Kesimpulan</label>
                        <div class="detail-value" style="white-space: pre-wrap;">
                            {{ $periksaTrimester->kesimpulan ?? '-' }}
                        </div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-file-medical" aria-hidden="true"></i>
                            Rekomendasi</label>
                        <div class="detail-value" style="white-space: pre-wrap;">
                            {{ $periksaTrimester->rekomendasi ?? '-' }}
                        </div>
                    </div>
                </div>

                {{-- </div> --}}
            </div>













            <div class="form-step" id="trimester2">
                <h4>Trimester 2</h4>
                <div class="d-flex justify-content-end gap-2">
                    <!-- Tombol dengan ikon -->

                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-female" aria-hidden="true"></i> Nama Ibu</label>
                        <div class="detail-value">{{ $periksaTrimester->identitas->ibu_nama ?? '-' }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-id-card-alt" aria-hidden="true"></i> NIK</label>
                        <div class="detail-value">{{ $periksaTrimester->identitas->ibu_nik ?? '-' }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 detail-group">
                        <label class="detail-label"><i class="fas fa-calendar-alt"></i> Tanggal Periksa</label>
                        <div class="detail-value">
                            {{ $periksaTrimester->tanggal_periksa_2 ? \Carbon\Carbon::parse($periksaTrimester->tanggal_periksa_2)->translatedFormat('l, d F Y') : '-' }}
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"> Keluhan</label>
                        <div class="detail-value" style="white-space: pre-wrap;">
                            {{ $periksaTrimester->keluhan ?? '-' }}
                        </div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"> Pemeriksaan</label>
                        <div class="detail-value" style="white-space: pre-wrap;">
                            {{ $periksaTrimester->pemeriksaan ?? '-' }}
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"> Tindakan</label>
                        <div class="detail-value" style="white-space: pre-wrap;">
                            {{ $periksaTrimester->tindakan ?? '-' }}
                        </div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"> Saran</label>
                        <div class="detail-value" style="white-space: pre-wrap;">
                            {{ $periksaTrimester->saran ?? '-' }}
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    @php
                        use Carbon\Carbon;
                    @endphp
                    <div class="col-12 detail-group">
                        <label class="detail-label">Tanggal Kembali</label>
                        <div class="detail-value" style="white-space: pre-wrap;">
                            {{ $periksaTrimester->tanggal_kembali ? Carbon::parse($periksaTrimester->tanggal_kembali)->translatedFormat('d F Y') : '-' }}
                        </div>
                    </div>
                </div>
                {{-- </div> --}}

            </div>











            <div class="form-step" id="trimester3">
                <h4>Trimester 3</h4>

                {{-- Informasi Identitas --}}
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

                {{-- Tanggal & Pemeriksaan Umum --}}
                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-calendar-alt"></i> Tanggal Periksa</label>
                        <div class="detail-value">
                            {{ $periksaTrimester->tanggal_periksa_3 ? \Carbon\Carbon::parse($periksaTrimester->tanggal_periksa_3)->translatedFormat('l, d F Y') : '-' }}
                        </div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-eye"></i> Konjungtiva</label>
                        <div class="detail-value">{{ $periksaTrimester->konjungtiva ?? '-' }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-eye-dropper"></i> Sklera</label>
                        <div class="detail-value">{{ $periksaTrimester->sklera ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-paint-roller"></i> Kulit</label>
                        <div class="detail-value">{{ $periksaTrimester->kulit ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-user-neck"></i> Leher</label>
                        <div class="detail-value">{{ $periksaTrimester->leher ?? '-' }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-tooth"></i> Gigi/Mulut</label>
                        <div class="detail-value">{{ $periksaTrimester->gigi_mulut ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-head-side-mask"></i> THT</label>
                        <div class="detail-value">{{ $periksaTrimester->tht ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-heart"></i> Dada (Jantung)</label>
                        <div class="detail-value">{{ $periksaTrimester->dada ?? '-' }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-lungs"></i> Paru</label>
                        <div class="detail-value">{{ $periksaTrimester->paru ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-stomach"></i> Perut</label>
                        <div class="detail-value">{{ $periksaTrimester->perut ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-shoe-prints"></i> Tungkai</label>
                        <div class="detail-value">{{ $periksaTrimester->tungkai ?? '-' }}</div>
                    </div>
                </div>

                {{-- Umur Kehamilan --}}
                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-baby"></i> Umur Kehamilan Berdasarkan HPHT
                            (Minggu)</label>
                        <div class="detail-value">{{ $periksaTrimester->umur_kehamilan_hpht ?? '-' }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-baby-carriage"></i> Umur Kehamilan Berdasarkan USG
                            Trimester 1 (Minggu)</label>
                        <div class="detail-value">{{ $periksaTrimester->umur_kehamilan_usg ?? '-' }}</div>
                    </div>
                </div>

                {{-- Data Bayi --}}
                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-circle"></i> Jumlah Bayi</label>
                        <div class="detail-value">{{ $periksaTrimester->jumlah_bayi ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-map-marker-alt"></i> Letak Bayi</label>
                        <div class="detail-value">{{ $periksaTrimester->letak_produk_kehamilan ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> Presentasi Bayi</label>
                        <div class="detail-value">{{ $periksaTrimester->presentasi_bayi ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> Keadaan Bayi</label>
                        <div class="detail-value">{{ $periksaTrimester->keadaan_bayi ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> Denyut Jantung Bayi(x/m)</label>
                        <div class="detail-value">{{ $periksaTrimester->djj ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> Irama Denyut Jantung Bayi</label>
                        <div class="detail-value">{{ $periksaTrimester->irama_djj ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> Lokasi Plasenta</label>
                        <div class="detail-value">{{ $periksaTrimester->lokasi_plasenta ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> Jumlah Cairan Ketuban</label>
                        <div class="detail-value">{{ $periksaTrimester->jumlah_cairan_ketuban ?? '-' }}</div>
                    </div>

                    {{-- Pemeriksaan Biometri Bayi --}}
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> SDP(cm)</label>
                        <div class="detail-value">{{ $periksaTrimester->sdp ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> BPD(cm)</label>
                        <div class="detail-value">{{ $periksaTrimester->bpd ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> BPD Sesuai(minggu)</label>
                        <div class="detail-value">{{ $periksaTrimester->bpd_sesuai ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> HC(cm)</label>
                        <div class="detail-value">{{ $periksaTrimester->hc ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> HC Sesuai(minggu)</label>
                        <div class="detail-value">{{ $periksaTrimester->hc_sesuai ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> AC(cm)</label>
                        <div class="detail-value">{{ $periksaTrimester->ac ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> AC Sesuai(minggu)</label>
                        <div class="detail-value">{{ $periksaTrimester->ac_sesuai ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> FL(cm)</label>
                        <div class="detail-value">{{ $periksaTrimester->fl ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> FL Sesuai(minggu)</label>
                        <div class="detail-value">{{ $periksaTrimester->fl_sesuai ?? '-' }}</div>
                    </div>

                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> EFW/TBJ Sesuai(minggu)</label>
                        <div class="detail-value">{{ $periksaTrimester->efw_tbj_sesuai ?? '-' }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 detail-group">
                        <label class="detail-label"><i class="fas fa-child"></i> EFW/TBJ(gram)</label>
                        <div class="detail-value">{{ $periksaTrimester->efw_tbj ?? '-' }}</div>
                    </div>
                </div>

                {{-- Temuan Abnormal --}}
                <div class="row">


                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-exclamation-triangle"></i> Temuan Abnormal</label>
                        <div class="detail-value">
                            {{ $periksaTrimester->temuan_abnormal == 'ya' ? 'Ya' : ($periksaTrimester->temuan_abnormal == 'tidak' ? 'Tidak' : '-') }}
                        </div>
                    </div>

                    @if ($periksaTrimester->temuan_abnormal == 'ya')
                        <div class="col-6 detail-group">
                            <label class="detail-label"><i class="fas fa-pen"></i> Sebutkan Temuan Abnormal</label>
                            <div class="detail-value">{{ $periksaTrimester->temuan_abnormal_sebutkan ?? '-' }}</div>
                        </div>
                    @endif
                </div>
                {{-- Pemeriksaan Laboratorium --}}
                <h5>Pemeriksaan Laboratorium</h5>
                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-tint"></i> Hemoglobin (g/dL)</label>
                        <div class="detail-value">{{ $periksaTrimester->hemoglobin ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-tint"></i> Protein Urin (Mg/dL)</label>
                        <div class="detail-value">{{ $periksaTrimester->protein_urin ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-tint"></i> Urin Reduksi </label>
                        <div class="detail-value">{{ $periksaTrimester->urin_reduksi ?? '-' }}</div>
                    </div>
                </div>

                {{-- Skrining Kesehatan Jiwa --}}
                <h5>Skrining Kesehatan Jiwa</h5>
                <div class="row">
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-brain"></i> Skrining Dilakukan?</label>
                        <div class="detail-value">{{ ucfirst($periksaTrimester->skrining_kesehatan_jiwa ?? '-') }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-arrow-right"></i> Tindak Lanjut</label>
                        <div class="detail-value">{{ $periksaTrimester->tindak_lanjut_jiwa ?? '-' }}</div>
                    </div>
                    <div class="col-4 detail-group">
                        <label class="detail-label"><i class="fas fa-share-square"></i> Perlu Rujukan?</label>
                        <div class="detail-value">{{ ucfirst($periksaTrimester->perlu_rujukan ?? '-') }}</div>
                    </div>
                </div>

                {{-- Rencana Tindak Lanjut --}}
                <div class="row mt-4">
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-file-medical"></i> Rencana Konsultasi Lanjut</label>
                        <div class="detail-value" style="white-space: pre-wrap;">
                            {{ $periksaTrimester->rencana_konsultasi ?? '-' }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-file-medical"></i> Rencana Melahirkan</label>
                        <div class="detail-value" style="white-space: pre-wrap;">
                            {{ $periksaTrimester->rencana_melahirkan ?? '-' }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-file-medical"></i> Rencana Kontrasepsi</label>
                        <div class="detail-value" style="white-space: pre-wrap;">
                            {{ $periksaTrimester->rencana_kontrasepsi ?? '-' }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label"><i class="fas fa-file-medical"></i> Konseling</label>
                        <div class="detail-value" style="white-space: pre-wrap;">
                            {{ $periksaTrimester->konseling ?? '-' }}</div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 detail-group">
                        <label class="detail-label"><i class="fas fa-file-medical"></i> Tempat Melahirkan</label>
                        <div class="detail-value" style="white-space: pre-wrap;">
                            {{ $periksaTrimester->tempat_melahirkan ?? '-' }}</div>
                    </div>
                </div>
            </div>



            <div class="d-flex mt-3">
                <a href="{{ url('admin/ibu_hamil/periksa_trimester') }}" class="btn btn-secondary"
                    aria-label="Kembali ke daftar pemeriksaan">
                    <i class="fas fa-arrow-left" aria-hidden="true"></i> Kembali
                </a>
            </div>
        </div>
    </div>

    @php
        $requestedStep = request()->query('step', 'trimester1'); // default ke trimester1
    @endphp

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let activeStepId = @json($requestedStep);
            let allSteps = document.querySelectorAll('.form-step');
            allSteps.forEach(step => step.classList.remove('active'));

            let selectedStep = document.getElementById(activeStepId);
            if (selectedStep) {
                selectedStep.classList.add('active');
            }
        });
    </script>
@endsection
