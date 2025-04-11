@extends('nakes.layouts.base')
@section('content')

<div class="row">
    <div class="col-12">
        <h4 class="header-title mb-3">Form Pengisian KMS Balita</h4>
    </div>
</div>

<form action="{{ url('/nakes/kms/store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="mb-3 col-6">
            <label for="nama_balita" class="form-label">Nama Balita</label>
            <input type="text" name="nama_balita" id="nama_balita" class="form-control" placeholder="Masukkan Nama Balita" required>
        </div>

        <div class="mb-3 col-6">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
        </div>

        <div class="mb-3 col-6">
            <label for="umur" class="form-label">Umur (bulan)</label>
            <input type="number" name="umur" id="umur" class="form-control" placeholder="Contoh: 18" required>
        </div>

        <div class="mb-3 col-6">
            <label for="berat_badan" class="form-label">Berat Badan (kg)</label>
            <input type="number" step="0.1" name="berat_badan" id="berat_badan" class="form-control" placeholder="Contoh: 10.5" required>
        </div>

        <div class="mb-3 col-6">
            <label for="tinggi_badan" class="form-label">Tinggi Badan (cm)</label>
            <input type="number" step="0.1" name="tinggi_badan" id="tinggi_badan" class="form-control" placeholder="Contoh: 80.0" required>
        </div>

        <div class="mb-3 col-6">
            <label for="vitamin" class="form-label">Pemberian Vitamin</label>
            <select name="vitamin" id="vitamin" class="form-control" required>
                <option value="">-- Pilih --</option>
                <option value="A">Vitamin A</option>
                <option value="D">Vitamin D</option>
                <option value="Belum Diberi">Belum Diberi</option>
            </select>
        </div>

        <div class="mb-3 col-6">
            <label for="status_gizi" class="form-label">Status Gizi</label>
            <select name="status_gizi" id="status_gizi" class="form-control" required>
                <option value="">-- Pilih --</option>
                <option value="Normal">Normal</option>
                <option value="Gizi Kurang">Gizi Kurang</option>
                <option value="Gizi Buruk">Gizi Buruk</option>
                <option value="Gizi Lebih">Gizi Lebih</option>
            </select>
        </div>

        <div class="mb-3 col-12">
            <label for="catatan" class="form-label">Catatan Tambahan</label>
            <textarea name="catatan" id="catatan" class="form-control" rows="3" placeholder="Tambahkan catatan jika perlu"></textarea>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>

@endsection
