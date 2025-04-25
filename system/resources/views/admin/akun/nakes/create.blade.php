@extends('admin.layouts.base')
@section('content')
<form action="{{ url('') }}" method="POST">
    @csrf
    <div class="row">
        <div class="mb-3 col-6">
            <label for="nama_bidan" class="form-label">Fasyankes</label>
            <input type="text" name="nama_bidan" id="nama_bidan" class="form-control"
                placeholder="Masukkan Nama Fasyankes" required>
        </div>
        <div class="mb-3 col-6">
            <label for="nik" class="form-label">Nama Lengkap</label>
            <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan Nama Lengkap"
                required>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-6">
            <label for="no_telpon" class="form-label">NIK Sesuai KTP</label>
            <input type="text" name="no_telpon" id="no_telpon" class="form-control" placeholder="Masukkan Nik Sesuai KTP"
                required>
        </div>
        <div class="mb-3 col-6">
            <label for="email" class="form-label">Email/Username</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email/Username"
                required>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-6">
            <label for="no_telpon" class="form-label">No Telp/Wa</label>
            <input type="text" name="no_telpon" id="no_telpon" class="form-control" placeholder="Masukkan No Telp/Wa"
                required>
        </div>
        <div class="mb-3 col-6">
            <label for="email" class="form-label">Tempat Lahir</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Tempat Lahir"
                required>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-6">
            <label for="no_telpon" class="form-label">Tanggal Lahir</label>
            <input type="date" name="no_telpon" id="no_telpon" class="form-control" placeholder="Masukkan Tanggal Lahir"
                required>
        </div>
        <div class="mb-3 col-6">
            <label for="email" class="form-label">Alamat Lengkap</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Alamat Lengkap"
                required>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-6">
            <label for="no_telpon" class="form-label">Desa/Kelurahan</label>
            <input type="text" name="no_telpon" id="no_telpon" class="form-control" placeholder="Masukkan Desa/Kelurahan"
                required>
        </div>
        <div class="mb-3 col-6">
            <label for="email" class="form-label">Kecamatan</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Kecamatan"
                required>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-6">
            <label for="no_telpon" class="form-label">Kabupaten</label>
            <input type="text" name="no_telpon" id="no_telpon" class="form-control" placeholder="Masukkan Kabupaten"
                required>
        </div>
        <div class="mb-3 col-6">
            <label for="email" class="form-label">Provinsi</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Provinsi"
                required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
