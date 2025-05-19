@extends('admin.layouts.base')

@section('content')

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

<div class="container">
    <div class="card">
        <h1 class="text-center mb-4">Edit Posyandu</h1>
        <form action="{{ url('admin/posyandu/update', $detail->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="mb-4 col-12">
                    <label for="nama_posyandu" class="form-label">Nama Posyandu</label>
                    <input type="text" class="form-control" id="nama_posyandu" name="nama_posyandu"
                        value="{{ $detail->nama_posyandu }}" required>
                </div>
            </div>

            <div class="row">
                <div class="mb-4 col-6">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal"
                        value="{{ $detail->tanggal }}" required>
                </div>
                <div class="mb-4 col-6">
                    <label for="waktu" class="form-label">Waktu</label>
                    <input type="time" class="form-control" id="waktu" name="waktu"
                        value="{{ $detail->waktu }}" required>
                </div>
            </div>

            <div class="row">
                <div class="mb-4 col-12">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi"
                        value="{{ $detail->lokasi }}" required>
                </div>
            </div>

            <div class="row">
                <div class="mb-4 col-12">
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
            </div>

            <div class="mb-4">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
                @if ($detail->foto)
                    <img src="{{ asset('storage/posyandu/' . $detail->foto) }}" alt="Foto Posyandu"
                        class="img-thumbnail mt-2" width="150">
                @endif
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="{{ url('admin/posyandu') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Batal
                </a>
            </div>
        </form>
    </div>
</div>

@endsection

@push('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Inisialisasi Select2 -->
    <script>
        $(document).ready(function () {
            $('#fasyankes_id').select2({
                placeholder: "Pilih Fasyankes",
                allowClear: true
            });
        });
    </script>
@endpush

@push('styles')
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
