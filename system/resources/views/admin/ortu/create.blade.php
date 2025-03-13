@extends('admin.layouts.base')
@section('content')
<form action="{{ url('/admin/ortu/store') }}" method="POST">
    @csrf <!-- Token keamanan Laravel -->

    <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
    </div>

    <div class="mb-3">
        <label for="jk_ortu" class="form-label">Jenis Kelamin</label>
        <select name="jk_ortu" id="jk_ortu" class="form-control" required>
            <option value="" disabled selected>Pilih Jenis Kelamin</option>
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="tmp_lahir_ortu" class="form-label">Tempat Lahir</label>
        <input type="text" name="tmp_lahir_ortu" id="tmp_lahir_ortu" class="form-control" placeholder="Masukkan Tempat Lahir" required>
    </div>

    <div class="mb-3">
        <label for="tgl_lahir_ortu" class="form-label">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir_ortu" id="tgl_lahir_ortu" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="tlp" class="form-label">No Telpon</label>
        <input type="text" name="tlp" id="tlp" class="form-control" placeholder="Masukkan No Telpon" required>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
