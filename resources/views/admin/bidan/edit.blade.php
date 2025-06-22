@extends('admin.layouts.base')
@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
            }

            .form-label {
                font-weight: 600;
            }

            .btn-success {
                background: #28a745;
                font-weight: bold;
                padding: 10px 20px;
            }

            .btn-secondary {
                font-weight: bold;
                padding: 10px 20px;
            }

            .btn i {
                margin-right: 5px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="card">
                <h1 class="text-center mb-4">Edit Data Tenaga Kesehatan</h1>
                <form action="{{ url('admin/bidan/update', $detail->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-4 col-6">
                            <label for="nama_bidan" class="form-label">
                                <i class="fas fa-user-nurse"></i> Nama
                            </label>
                            <input type="text" class="form-control" id="nama_bidan" name="nama_bidan"
                                value="{{ $detail->nama_bidan }}" required>
                        </div>

                        <div class="mb-4 col-6">
                            <label for="nik" class="form-label">
                                <i class="fas fa-id-card"></i> NIK
                            </label>
                            <input type="text" class="form-control" id="nik" name="nik"
                                value="{{ $detail->nik }}" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="mb-3 col-12">
                            <label for="profesi" class="form-label">Profesi</label>
                            <select name="profesi" id="profesi" class="form-control" required>
                                <option value="bidan" {{ old('profesi', $detail->profesi) == 'bidan' ? 'selected' : '' }}>
                                    Bidan</option>
                                <option value="dokter" {{ old('profesi', $detail->profesi) == 'dokter' ? 'selected' : '' }}>
                                    Dokter</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-4 col-6">
                            <label for="no_telpon" class="form-label">
                                <i class="fas fa-phone"></i> No. Telepon
                            </label>
                            <input type="text" class="form-control" id="no_telpon" name="no_telpon"
                                value="{{ $detail->no_telpon }}" required>
                        </div>
                        <div class="mb-4 col-6">
                            <label for="email" class="form-label">
                                <i class="fas fa-envelope"></i> Email
                            </label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $detail->email }}" required>
                        </div>
                    </div>
                    <div class="row">
                        @php
                            $namaFasyankes = '';
                            foreach ($fasyankes as $fas) {
                                if ($fas->id == $detail->fasyankes_id) {
                                    $namaFasyankes = $fas->nama;
                                    break;
                                }
                            }
                        @endphp

                        <div class="mb-4 col-6">
                            <label for="fasyankes_id" class="form-label">
                                <i class="fas fa-hospital"></i> Pilih Fasyankes
                            </label>
                            <select class="form-control select2" id="fasyankes_id" name="fasyankes_id" required>
                                <option value="" disabled>Pilih Fasyankes</option>
                                @foreach ($fasyankes as $fas)
                                    <option value="{{ $fas->id }}"
                                        {{ $detail->fasyankes_id == $fas->id ? 'selected' : '' }}>
                                        {{ $fas->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4 col-6">
                            <label for="tempat_lahir" class="form-label">
                                <i class="fas fa-map-marker-alt"></i> Tempat Lahir
                            </label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                value="{{ $detail->tempat_lahir }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-4 col-6">
                            <label for="tanggal_lahir" class="form-label">
                                <i class="fas fa-calendar-alt"></i> Tanggal Lahir
                            </label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                value="{{ $detail->tanggal_lahir }}" required>
                        </div>
                        <div class="mb-4 col-6">
                            <label for="alamat_lengkap" class="form-label">
                                <i class="fas fa-map"></i> Alamat Lengkap
                            </label>
                            <input type="text" class="form-control" id="alamat_lengkap" name="alamat_lengkap"
                                value="{{ $detail->alamat_lengkap }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-4 col-6">
                            <label for="provinsi" class="form-label">
                                <i class="fas fa-globe-asia"></i> Provinsi
                            </label>
                            <input type="text" class="form-control" id="provinsi" name="provinsi"
                                value="{{ $detail->provinsi }}" required>
                        </div>
                        <div class="mb-4 col-6">
                            <label for="kabupaten" class="form-label">
                                <i class="fas fa-city"></i> Kabupaten
                            </label>
                            <input type="text" class="form-control" id="kabupaten" name="kabupaten"
                                value="{{ $detail->kabupaten }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-4 col-6">
                            <label for="kecamatan" class="form-label">
                                <i class="fas fa-map-signs"></i> Kecamatan
                            </label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                                value="{{ $detail->kecamatan }}" required>
                        </div>
                        <div class="mb-4 col-6">
                            <label for="desa" class="form-label">
                                <i class="fas fa-home"></i> Desa
                            </label>
                            <input type="text" class="form-control" id="desa" name="desa"
                                value="{{ $detail->desa }}" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                        <a href="{{ url('admin/bidan') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </body>
@endsection
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#fasyankes_id').select2({
                placeholder: "Pilih Fasyankes",
                allowClear: true
            });
        });
    </script>
@endpush
