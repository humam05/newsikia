@extends('layouts.base')
@section('content')
<form action="{{ url('/admin/fasyankes/store') }}" method="POST">
    @csrf <!-- Token keamanan Laravel -->

    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input type="text" name="id" id="id" class="form-control" placeholder="Masukkan ID" required>
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
    </div>

    <div class="mb-3">
        <label for="kecamatan" class="form-label">Kecamatan</label>
        <input type="text" name="kecamatan" id="kecamatan" class="form-control" placeholder="Masukkan Kecamatan" required>
    </div>

    <div class="mb-3">
        <label for="kelurahan" class="form-label">Kelurahan</label>
        <input type="text" name="kelurahan" id="kelurahan" class="form-control" placeholder="Masukkan Kelurahan" required>
    </div>

    <div class="mb-3">
        <label for="desa" class="form-label">Desa</label>
        <input type="text" name="desa" id="desa" class="form-control" placeholder="Masukkan Desa" required>
    </div>
    <div class="mb-3">
        <label for="rt_rw" class="form-label">Rt/Rw</label>
        <input type="text" name="rt_rw" id="rt_rw" class="form-control" placeholder="Masukkan Rt/Rw" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
