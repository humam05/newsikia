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
                        <label class="detail-label">Nama</label>
                        <div class="detail-value">{{ $identitas->ibu_nama }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">NIK</label>
                        <div class="detail-value">{{ $identitas->ibu_nik }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">No. JKN</label>
                        <div class="detail-value">{{ $identitas->ibu_jkn }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">Faskes TK1</label>
                        <div class="detail-value">{{ $identitas->ibu_faskes_tk1 }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">Faskes Rujukan</label>
                        <div class="detail-value">{{ $identitas->ibu_faskes_rujukan }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">Tempat/Tanggal Lahir</label>
                        <div class="detail-value">{{ $identitas->ibu_ttl }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">Pendidikan</label>
                        <div class="detail-value">{{ $identitas->ibu_pendidikan }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">Pekerjaan</label>
                        <div class="detail-value">{{ $identitas->ibu_pekerjaan }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">Golongan Darah</label>
                        <div class="detail-value">{{ $identitas->ibu_gol_darah }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">Telepon</label>
                        <div class="detail-value">{{ $identitas->ibu_telepon }}</div>
                    </div>
                </div>

                <div class="detail-group">
                    <label class="detail-label">Alamat Rumah</label>
                    <div class="detail-value">{{ $identitas->ibu_alamat }}</div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">Asuransi Lain</label>
                        <div class="detail-value">{{ $identitas->ibu_asuransi_lain }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">Nomor</label>
                        <div class="detail-value">{{ $identitas->ibu_asuransi_nomor }}</div>
                    </div>
                </div>

                <div class="detail-group">
                    <label class="detail-label">Tanggal Berlaku</label>
                    <div class="detail-value">{{ $identitas->ibu_asuransi_berlaku }}</div>
                </div>

                <h2>Identitas Suami/Keluarga</h2>
                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">Nama</label>
                        <div class="detail-value">{{ $identitas->suami_nama }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">NIK</label>
                        <div class="detail-value">{{ $identitas->suami_nik }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">No. JKN</label>
                        <div class="detail-value">{{ $identitas->suami_jkn }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">Faskes TK1</label>
                        <div class="detail-value">{{ $identitas->suami_faskes_tk1 }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">Faskes Rujukan</label>
                        <div class="detail-value">{{ $identitas->suami_faskes_rujukan }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">Tempat/Tanggal Lahir</label>
                        <div class="detail-value">{{ $identitas->suami_ttl }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">Pendidikan</label>
                        <div class="detail-value">{{ $identitas->suami_pendidikan }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">Pekerjaan</label>
                        <div class="detail-value">{{ $identitas->suami_pekerjaan }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">Golongan Darah</label>
                        <div class="detail-value">{{ $identitas->suami_gol_darah }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">Telepon</label>
                        <div class="detail-value">{{ $identitas->suami_telepon }}</div>
                    </div>
                </div>

                <div class="detail-group">
                    <label class="detail-label">Alamat Rumah</label>
                    <div class="detail-value">{{ $identitas->suami_alamat }}</div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">Asuransi Lain</label>
                        <div class="detail-value">{{ $identitas->suami_asuransi_lain }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">Nomor</label>
                        <div class="detail-value">{{ $identitas->suami_asuransi_nomor }}</div>
                    </div>
                </div>

                <div class="detail-group">
                    <label class="detail-label">Tanggal Berlaku</label>
                    <div class="detail-value">{{ $identitas->suami_asuransi_berlaku }}</div>
                </div>

               

                <h2>Fasilitas Pelayanan Kesehatan</h2>
                <h3>Primer</h3>
                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">Puskesmas Domisili</label>
                        <div class="detail-value">{{ $identitas->puskesmas }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">No. Reg. Kohort Ibu</label>
                        <div class="detail-value">{{ $identitas->kohort_ibu }}</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">No. Reg. Kohort Bayi</label>
                        <div class="detail-value">{{ $identitas->kohort_bayi }}</div>
                    </div>
                    <div class="col-6 detail-group">
                        <label class="detail-label">No. Reg. Kohort Balita dan Anak Pra-Sekolah</label>
                        <div class="detail-value">{{ $identitas->kohort_balita }}</div>
                    </div>
                </div>

                <h3>Sekunder</h3>
                <div class="row">
                    <div class="col-6 detail-group">
                        <label class="detail-label">No. Catatan Medik RS</label>
                        <div class="detail-value">{{ $identitas->medik_rs }}</div>
                    </div>
                </div>

                <div class="d-flex mt-3">
                    <a href="{{ url('nakes/ibu_hamil/identitas') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </body>
@endsection
