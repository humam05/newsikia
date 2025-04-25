@extends('admin.layouts.base')
@section('content')
<form action="{{ url('') }}" method="POST">
    @csrf
    <div class="row">
        <div class="mb-3 col-6">
            <label for="nama_bidan" class="form-label">Fasyankes</label>
            <input type="text" name="nama_bidan" id="nama_bidan" class="form-control"
                placeholder="Masukkan Nama Posyandu" required>
        </div>
        <div class="mb-3 col-6">
            <label for="nik" class="form-label">Nama Lengkap</label>
            <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan Tanggal"
                required>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-6">
            <label for="no_telpon" class="form-label">NIK Sesuai KTP</label>
            <input type="text" name="no_telpon" id="no_telpon" class="form-control" placeholder="Masukkan Waktu Posyandu"
                required>
        </div>
        <div class="mb-3 col-6">
            <label for="email" class="form-label">Email/Username</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email"
                required>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-6">
            <label for="no_telpon" class="form-label">No Telp/Wa</label>
            <input type="text" name="no_telpon" id="no_telpon" class="form-control" placeholder="Masukkan Waktu Posyandu"
                required>
        </div>
        <div class="mb-3 col-6">
            <label for="email" class="form-label">Tempat Lahir</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email"
                required>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-6">
            <label for="no_telpon" class="form-label">Tanggal Lahir</label>
            <input type="date" name="no_telpon" id="no_telpon" class="form-control" placeholder="Masukkan Waktu Posyandu"
                required>
        </div>
        <div class="mb-3 col-6">
            <label for="email" class="form-label">Alamat Lengkap</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email"
                required>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-6">
            <label for="no_telpon" class="form-label">Desa/Kelurahan</label>
            <input type="text" name="no_telpon" id="no_telpon" class="form-control" placeholder="Masukkan Waktu Posyandu"
                required>
        </div>
        <div class="mb-3 col-6">
            <label for="email" class="form-label">Kecamatan</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email"
                required>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-6">
            <label for="no_telpon" class="form-label">Kabupaten</label>
            <input type="text" name="no_telpon" id="no_telpon" class="form-control" placeholder="Masukkan Waktu Posyandu"
                required>
        </div>
        <div class="mb-3 col-6">
            <label for="email" class="form-label">Provinsi</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email"
                required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
